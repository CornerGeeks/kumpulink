<?php
require_once("header.php");
?>
<?php

if(isset($_GET["title"],$_GET["description"],$_GET["tags"])){
	$bookmark=R::dispense("bookmark"); //hrm. should we protect for XSS before or after SQL
	$bookmark->title=$_GET["title"];
	$bookmark->description=$_GET["description"];
	$bookmark->uri=$_GET["uri"];
	$bookmark_id=R::store($bookmark);
	
	if($_GET["tags"]!=""){
		$tags=explode(",",mb_strtolower($_GET["tags"]));
		foreach($tags as $t){
			$t = preg_replace("/[^a-z0-9]+/", "", $t);
			$tag=R::dispense("tag");
			$tag->text=$t;
			$tag->bookmark=$bookmark_id;
			R::store($tag);
		}
	}
	
	header("Location: ./");

}

?>