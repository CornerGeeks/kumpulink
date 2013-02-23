<?php
require_once("rb.php");
require_once("config.php");
R::setup("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
session_start();

function strip_slashes_recursive($mixed){
	if(is_string($mixed))
    	return stripslashes($mixed);	
    if(is_array($mixed))
        foreach($mixed as $i=>$value)
            $mixed[$i]=strip_slashes_recursive($value); 
    return $mixed; 
}

function hasher($p){
  $salt="";
  for($i=0;$i<16;$i++)
  	$salt.=chr(rand(ord('@'),ord('~'))); //create a random 16 char string from ascii @ to ~
  return crypt($p,'$5$rounds=5000$'.$salt.'$'); //$5 = SHA_256
}
function check_hash($p,$h){
	return $h==crypt($p,$h);
}

if (get_magic_quotes_gpc()){ //!! ideally disable the magic
	$_GET=strip_slashes_recursive($_GET);
	$_POST=strip_slashes_recursive($_POST);
	$_COOKIE=strip_slashes_recursive($_COOKIE);
}
?>