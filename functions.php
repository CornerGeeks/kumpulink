<?php

require_once("header.php");

function add_tags($id,$tags){
	$tags=explode(",",mb_strtolower($tags)); //split csv string into array
		foreach($tags as $t){
			$t = preg_replace("/[^a-z0-9\-]+/", "", $t);  //allow only alphanumber and '-' 
			$tag=R::dispense("tag");
			$tag->text=$t;
			$tag->bookmark=$id;  //maybe bookmark->ownTag[] would be better
			R::store($tag);
		}
	return true;
}

function add_bookmark($uri,$title,$description){
	$bookmark=R::dispense("bookmark"); //hrm. should we protect for XSS before or after SQL insert?
	$bookmark->title=$title;
	$bookmark->description=$description;
	$bookmark->uri=$uri;
	$bookmark_id=R::store($bookmark);
	return $bookmark_id; //wonder if should return $bookmark instead
}

if(isset($_POST["action"])){
	if($_POST["action"]=="logout"){
		unset($_SESSION);
		session_destroy();
	}
}

class User
{
	private static $user_id=0;
	private static $initialized=false;
	private static function init(){
		if(self::$initialized)
			return;
			
		if(isset($_SESSION["user_id"])){
			self::$user_id=$_SESSION["user_id"];
		}
	}
	
	private static function login($username,$password){
		self::init();
		$user=R::findOne("user","name = ?",array($username));
		if($user->id && check_hash($password,$user->password)){
			$_SESSION["user_id"]=$user->id;
			self::$user_id=$user->id;
		}
		return self::$user_id;
	}
	
	private static function logout(){
		unset($_SESSION);
		session_destroy();
		self::$user_id=0;
	}
	
	private static function get_id($username){
		self::init();
		$existing=R::findOne("user","name = ?",array($username));
		return $existing->id;
	}
	private static function register($arr){  //$arr passed from $_POST ?
		self::init();
		if(isset($arr["username"],$arr["password"])){ //variables set
		if(!self::get_id($arr["username"])){  //username doesn't exist
			$user=R::dispense("user");
			$user->name=$arr["username"];
			$user->password=hasher($arr["password"]);
			self::$user_id=R::store($user);
		} //username doestn't exist
		} //variables set
		return self::$user_id;
	}
	private static function logged_in(){
		self::init();
		return self::$user_id;
	}
}

?>

