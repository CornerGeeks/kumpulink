<?php
require_once("header.php");


?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>kumpulink</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">


<!--replace to min in production-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
.inline .btn {
	margin-bottom:5px;
}
</style>

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
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#">kumpulink</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
      <ul class="nav">
      <li class="active"><a href="#">Home</a></li>
	  <li><a href="#">Bookmarklet</a></li>
	  </ul>
	 <form class="navbar-form pull-right">
	  <input type="text" class="span2">
	  <button type="submit" class="btn">Submit</button>
	</form>
      </div>
 
    </div>
  </div>
</div>

<div class="container">


<div id="main" class="tab-pane active">
<div class="media span6">
  <div class="media">
  <a class="pull-left" href="http://twitter.com/mfirdaus/"><img src="http://www.google.com/s2/u/0/favicons?domain=plus.google.com"/></a>
  <div class="media-body">
    <h4 class="media-heading"><a href="http://twitter.com/mfirdaus/">@mfirdaus at Twitter</a></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel ligula dolor. Vivamus scelerisque nisi in lorem viverra blandit. Nunc tortor neque, laoreet nec tincidunt nec, hendrerit a ipsum. Donec tristique vehicula ipsum in fermentum. Sed pulvinar tellus ac felis vestibulum pellentesque. Morbi non diam tellus.</p>
    <ul class="inline">
    <li>
	  <div class="btn-group">
		<button class="btn btn-small">social-media</button>
		<button class="btn btn-small">x</button>
	  </div>
	</li>
	<li>
	  <div class="btn-group">
		<button class="btn btn-small">narcissm</button>
		<button class="btn btn-small">x</button>
	  </div>	</li>
	<li><div class="btn-group">
		<button class="btn btn-small">meta</button>
		<button class="btn btn-small">x</button>
	  </div>	</li>
	<li>
	<div class="btn-group">
		<button class="btn btn-small">social-media</button>
		<button class="btn btn-small">x</button>
	  </div>
	  </li>
	<li>	<li>
	<div class="btn-group">
		<button class="btn btn-small">social-media</button>
		<button class="btn btn-small">x</button>
	  </div>
	  </li>
	<li>	<li>
	<div class="btn-group">
		<button class="btn btn-small">social-media</button>
		<button class="btn btn-small">x</button>
	  </div>
	  </li>
	</ul>
	<div class="input-append input-block-level">
	  <input class="span2" type="text" placeholder="Add tags, seperated by commas.">
	  <button class="btn" type="button">+</button>
	</div>
  </div>
</div>
  

</div>
</div>
</body>
</html>