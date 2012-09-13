<?php
	session_start();
	
	if(isset($_SESSION['branchId']) && $_SESSION['branchId'] == 3348)
		$eltActif = 'gi';
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>EDT - IAE</title>
	<meta name="description" content="Emploi du temps non officiel de la licence 3 SI de l'IAE Savoie Mont-Blanc">
	<meta name="author" content="thomasgaillard">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	
	<link href='http://fonts.googleapis.com/css?family=Homenaje' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

	<link href="img/favicon.ico"rel="shortcut icon">
	<link href="img/apple-touch-icon-57x57.png" sizes="57x57" rel="apple-touch-icon">
	<link href="img/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
	<link href="img/apple-touch-icon-72x72.png" sizes="72x72"  rel="apple-touch-icon">
	<link href="img/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
	
	<link href="img/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
	<link href="img/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<link href="img/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
	<link href="img/apple-touch-startup-image-1024x748.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
	<link href="img/apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
	<link href="img/apple-touch-startup-image-2048x1496.png" media="(device-width: 1536px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

	<link rel="stylesheet" href="css/style.css">

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
	<header id="main-head">
		<div id="main-head-content">
			<div class="pull-left">
				<h1 id="title"><span class="logo-awesome" id="main-logo">&#xf073;&nbsp;</span>emploi du temps</h1>
			</div>
			<div class="pull-right">
				<button id="enter-fullscreen" class="display-none btn" type="button"><span class="logo-awesome">&#xf065;&nbsp;</span> fullscreen</button>
				<button id="exit-fullscreen" class="display-none btn" type="button"><span class="logo-awesome">&#xf066;&nbsp;</span> exit fullscreen</button>
			</div>
			<div class="clear">
			</div>
		</div>
	</header>
	<div id="container">
		<nav id="main-nav">
			<ul>
				<li id="l3INFO" <?php if($eltActif != 'gi') echo 'class="active"'; ?>><a href="#">info</a></li>
				<li id="l3GI" <?php if($eltActif == 'gi') echo 'class="active"'; ?>><a href="#">gi</a></li>
			</ul>
		</nav>
		<div id="main" role="main">
			<span id="prev" class="logo-awesome nav-button left">&#xf053;&nbsp;</span>
			<span id="next" class="logo-awesome nav-button right">&#xf054;&nbsp;</span>
			<div id="content">
				&nbsp
			</div>
		</div>
	</div>
	<footer id="main-footer">
		<p>
			<a href="https://github.com/thomasgaillard/iaeEDT.git"><span class="logo-awesome">&#xf09b;&nbsp;</span>view project on github</a> - use left and right arrow to navigate - developed and designed by <a href="https://twitter.com/thomasgaillard">@thomasgaillard</a>
		</p>
	</footer>
			
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
</body>
</html>