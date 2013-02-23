<?php
require_once("header.php");


?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>INSERT TITLE HERE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">


<!--replace to min in production-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="apple-touch-fullscreen" content="yes" />

<!--insert apple icons, here-->
<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-114.png" />
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114.png" />
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-144.png" />
<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144.png" />

</head>
<body>
<ul class="nav nav-tabs" id="navTab">
  	  <li><a href="#content1" data-toggle="tab"><i class="icon-home"></i></a></li>
	  <li><a href="#content2" data-toggle="tab"><i class="icon-user"></i></a></li>
</ul>
<div class="container">
<div class="tab-content">


<div id="content1" class="tab-pane active">
Content here
</div>

<div id="content2" class="tab-pane">
Content 2 here
</div>

</div> <!--tabcontent-->
</div> <!--container-->
</body>
</html>