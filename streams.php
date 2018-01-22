<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
	<title>ShotsFired Stream Team</title>
  <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
	<!--REQUIRED STYLE SHEETS-->
	<!-- BOOTSTRAP CORE STYLE CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLE CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<!-- CUSTOM STYLE CSS -->
	<link href="assets/css/style.css" rel="stylesheet" />
	<!-- GOOGLE FONT -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.rawgit.com/Fugiman/Twitch-Channel-Status/1d74252edf89110507cbf3088f9c3eaa38fac9d3/twitch-channel-status.min.js"></script>

	<img data-twitch-channel="riotgames">

</head>

<body>
	<!--Header section  -->
	<div id="header">
		<?php include("header.html");?>
	</div>


	<script>
		var params = {};
		location.search.slice(1).split("&").forEach(function (kv) {
		  var a = kv.split("=");
		  params[decodeURIComponent(a[0])] = decodeURIComponent(a[1]) || "";
		});

		var channels = params["channels"] ? params["channels"].split(",") : ["riotgames", "dota2ti", "machinima", "lirik", "twitch", "manvsgame", "wyld"];

		for(var i=0; i < channels.length; i++) {
		  var channel = channels[i];
		  var p = document.createElement("p");
		  p.innerHTML = channel + ' = <img data-twitch-channel="' + channel + '">';
		  document.body.appendChild(p);
		}
	</script>





	<div id="footer">
		<?php include("footer.html");?>
	</div>
	<!--End footer Section -->
	<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
	<!-- CORE JQUERY  -->
	<script src="assets/plugins/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP CORE SCRIPT   -->
	<script src="assets/plugins/bootstrap.js"></script>
	<!-- PARALLAX SCRIPT   -->
	<script src="assets/plugins/4jquery.parallax-1.1.3.js"></script>
	<!-- CUSTOM SCRIPT   -->
	<script src="assets/js/custom.js"></script>
</body>
</html>
