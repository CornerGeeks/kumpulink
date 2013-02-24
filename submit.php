<?php
require_once("header.php");
require_once("functions.php");


if(isset($_GET["title"],$_GET["description"],$_GET["uri"],$_GET["tags"])){
	$bookmark_id=add_bookmark($_GET["uri"],$_GET["title"],$_GET["description"]);
	if($_GET["tags"]!=""){
		add_tags($bookmark_id,$_GET["tags"]);
	}
	header("Location: ./");

}

?>