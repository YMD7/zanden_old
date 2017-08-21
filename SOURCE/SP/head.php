<?php
	define("DOMAIN", "/Zanden/SP/");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?php echo DOMAIN ?>images/common/favicon.ico">

	<title>Zanden Audio Systems Ltd.</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!--Web Font-->
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="http://www.cssreset.com/downloads/css-resets/html5-doctor-reset-stylesheet/html5-doctor-reset-stylesheet.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo DOMAIN ?>style.css">
	<!--jQuery-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo DOMAIN ?>js/zanden_sp.js"></script>

	<!--Product Indiv. *************************** -->
	<!--Slick http://kenwheeler.github.io/slick/ -->
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.3.6/slick.css"/>
	<!--/Product Indiv. *************************** -->

</head>
<body>
	<!--Facebook-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "http://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!--/Facebook-->