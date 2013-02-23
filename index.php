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
<div class="row">
<div class="media span6">
<?php

$bookmarks=R::find('bookmark');

foreach($bookmarks as $b){
$uri=parse_url($b->uri);
?>
  <div class="media">
  <a class="pull-left" href="http://twitter.com/mfirdaus/"><img src="http://www.google.com/s2/u/0/favicons?domain=<?php echo $uri["host"]; ?>"/></a>
  <div class="media-body">
    <h4 class="media-heading"><a href="<?php echo htmlentities($b->uri); ?>"><?php echo htmlentities($b->title); ?></a></h4>
    <p><?php echo htmlentities($b->description); ?></p>
    <ul class="inline">
    <?php 
    $tags=R::find('tag','bookmark = ?',array($b->id));
    foreach($tags as $t){?>
    <li>
	  <div class="btn-group">
		<button class="btn btn-small"><?php echo htmlentities($t->text); ?></button>
		<!--<button class="btn btn-small">x</button>-->
	  </div>
	 </li>
	 <?php } ?>
	</ul>
	<div class="input-append input-block-level">
	  <input class="span2" type="text" placeholder="Add tags, seperated by commas.">
	  <button class="btn" type="button">+</button>
	</div>
  </div>
</div>
<?php } ?>

</div>

<div class="span4 offset2">
<h2>Add your bookmarks</h2>
<p>To add a site to this page, add the bookmarklet below and use it on the page that you want to kumpulink.</p>
<p>To add, you drag the button below to your bookmarks bar</p>
<a class="btn btn-large btn-success" href="javascript:(function()%7Bvar%20e%3Ddocument.createElement(%22div%22)%3Bvar%20t%3D%22<?php echo urlencode('http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/submit.php');?>%22%3Be.setAttribute(%22style%22%2C%22position%3Afixed%3Btop%3A10px%3Bright%3A10px%3Bz-index%3A100%3Bwidth%3A200px%3Bborder%3A1px%20solid%20%23000%3Bfont%3A8pt%20Arial%3Bpadding%3A10px%3Bborder-radius%3A10px%3Bbox-shadow%3A0px%200px%2010px%20rgba(0%2C0%2C0%2C0.5)%3Bbackground%3A%23666%22)%3Be.innerHTML%2B%3D'%3Cform%20method%3D%22get%22%20action%3D%22'%2Bt%2B'%22%3E%3Cb%20style%3D%22color%3A%23FFF%22%3EAdd%20Link%3C%2Fb%3E%3Cbr%2F%3E%3Cinput%20type%3D%22text%22%20name%3D%22title%22%20placeholder%3D%22title%22%20style%3D%22border%3A1px%20solid%20%23000%3Bwidth%3A100%25%22%2F%3E%3Ctextarea%20name%3D%22description%22%20placeholder%3D%22description%22%20rows%3D%225%22%20style%3D%22border%3A1px%20solid%20%23000%3Bwidth%3A100%25%22%3E%3C%2Ftextarea%3E%3Cinput%20name%3D%22tags%22%20type%3D%22text%22%20placeholder%3D%22Add%20tags%2C%20seperated%20by%20commas%22%20style%3D%22border%3A1px%20solid%20%23000%3Bwidth%3A100%25%22%2F%3E%3Cinput%20type%3D%22hidden%22%20name%3D%22uri%22%2F%3E%3Cbutton%20type%3D%22submit%22%20style%3D%22width%3A100%25%22%3EAdd%20link%3C%2Fbutton%3E%3C%2Fform%3E'%3Bvar%20n%3De.getElementsByTagName(%22input%22)%5B0%5D%2Cr%3De.getElementsByTagName(%22textarea%22)%5B0%5D%2Ci%3De.getElementsByTagName(%22input%22)%5B1%5D%2Cs%3De.getElementsByTagName(%22input%22)%5B2%5D%3Bs.value%3Ddocument.location.href%3Bn.value%3Ddocument.title%3Br.value%3Dfunction()%7Bvar%20t%3Ddocument.getElementsByTagName(%22meta%22)%3Bfor(var%20n%3D0%3Bn%3Ct.length%3Bn%2B%2B)%7Bif(t%5Bn%5D.getAttribute(%22name%22)%3D%3D%22description%22%7C%7Ct%5Bn%5D.getAttribute(%22name%22)%3D%3D%22og%3Adescription%22)return%20t%5Bn%5D.getAttribute(%22content%22)%7Dreturn%20document.body.innerText.substr(0%2C200).replace(%2F%5B%5Cr%5Cn%5D%2Fg%2C%22%20%22)%7D()%3Bdocument.body.appendChild(e)%7D)()">Kumpulink This</a>
</div>
</div>
</div>
</body>
</html>