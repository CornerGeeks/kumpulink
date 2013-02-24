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

?>

