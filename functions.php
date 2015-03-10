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

function add_bookmark($uri,$title,$description,$moderated = false){
	$bookmark=R::dispense("bookmark"); //hrm. should we protect for XSS before or after SQL insert?
	$bookmark->title=$title;
	$bookmark->description=$description;
	$bookmark->uri=$uri;
	$bookmark->moderated=$moderated;
	$bookmark_id=R::store($bookmark);
	return $bookmark_id; //wonder if should return $bookmark instead
}

class User
{
	private static $user_id=0;
	private static $user_name='';
	private static $moderator=false;
	private static $initialized=false;
	private static function init(){
		if(self::$initialized)
			return;

		if(isset($_SESSION["user_id"])){
			self::$user_id=$_SESSION["user_id"];
			$user=R::findOne("user","id = ?",array($_SESSION["user_id"]));
			if($user)
				self::save_user_data_to_session($user);
		}
		self::$initialized = true;
	}
	public static function login($username,$password){
		self::init();
		$user=R::findOne("user","name = ?",array($username));
		if($user && $user->id && check_hash($password,$user->password)){
			self::save_user_data_to_session($user);
		}
		return self::$user_id;
	}
	
	public static function logout(){
		unset($_SESSION);
		session_destroy();
		self::$user_id=0;
	}
	
	private static function get_id($username){
		self::init();
		$existing=R::findOne("user","name = ?",array($username));
		if($existing)
			return $existing->id;
		else
			return 0;
	}
	public static function get_name(){
		self::init();
		return self::$user_name;
	}
	public static function is_moderator(){
		self::init();
		return self::$moderator;
	}
	public static function register($username, $password){  //$arr passed from $_POST ?
		self::init();
		if(isset($username,$password)){ //variables set
			if(!self::get_id($username)){  //username doesn't exist
				$user=R::dispense("user");
				$user->name=$username;
				$user->password=hasher($password);
				$user->moderator = false;
				self::$user_id=R::store($user);
			} //username doestn't exist
		} //variables set
		return self::$user_id;
	}
	public static function logged_in(){
		self::init();
		return self::$user_id;
	}
	private static function save_user_data_to_session($user){
		$_SESSION["user_id"]  =self::$user_id  =$user->id;
		$_SESSION["user_name"]=self::$user_name=$user->name;
		$_SESSION["moderator"]=self::$moderator=$user->moderator;
	}
}

?>