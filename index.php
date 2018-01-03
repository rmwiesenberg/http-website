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
	<!-- BOOTSTRAP CORE STYLE CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.css" />
	<!--REQUIRED STYLE SHEETS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- FONTAWESOME STYLE CSS -->
	<link  rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<!-- CUSTOM STYLE CSS -->
	<link rel="stylesheet" href="assets/css/style.css" />
	<!-- GOOGLE FONT -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!--Header section  -->
	<div id="header">
		<?php include("header.html");?>
	</div>

	<a name="top_home"></a>

	<div id="home">


		<div class="container">
			<div class="row ">
				<div class="col-md-8 col-sm-6">
					<h1 class="head-main">Shots Fired</h1>
					<span class="head-sub-main">Stream Team</span>
					<div class="head-last">
						Welcome to our website, the hub for all things ShotsFired! <br>
					</div>

				</div>
				<div class="col-md-4 col-sm-6">
						<?php
							$quote=array("Gold hundred is twelve.",
													 "I spent 36 dollars on money.",
													 "The nucleus is the powerhouse of the cell...",
												 	 "Cats are more rubber than babies.",
												 	 "Can I make coffee juice?",
												   "Cacao my life!",
												 	 "Close your door. I'll s**t on your floor.");
							$author=array("Vitani",
														"Vitani",
														"Odega",
														"KR0N05",
													  "KR0N05",
														"BabyDucks",
													  "R3VAK");
							$q_idx=rand(0,6);
						?>
						<h3 align="left" class="rand-quote">
							<i>"<?php echo($quote[$q_idx]) ?>"</i>
						</h3>
						<p align="right" style="padding-right:20px; padding-bottom:40px; color: #fff">
							~ <?php echo($author[$q_idx]) ?>
						</p>

				</div>

			</div>
		</div>
	</div>
	<!--End Header section  -->
	<!--Services Section-->
	<section id="services">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 col-md-offset-2">
					<h2>What We Do</h2>
				</div>
			</div>


			<div class="row text-center space-pad">
				<div class="col-md-4 col-sm-4">
					<div>
						<i class="fa fa-bullhorn" style="font-size: 400%; color:#c97200"></i>
						<h3>Blogging</h3>
						<p>
							Gaming, Tech, and More! Join the discussion.
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div>
						<i class="fa fa-twitch" style="font-size: 400%; color:#6441a5"></i>
						<h3>Streaming</h3>
						<p>
							Singleplayer, Co-op, and multiplayer! OH MY!
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div>
						<i class="fa fa-youtube-play" style="font-size: 400%; color:#ff0000"></i>
						<h3>Youtube</h3>
						<p>
							I ain't a clip show, but I'll su... make you laugh.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>
						Featured Blog Post
					</h3>
					<p>
						COMING SOON
					</p>
				</div>
				<div class="col-md-6 col-sm-6 streamer-box">
					<div class="panel panel-default">
						<div class="panel-body">
							<ul class="nav nav-pills" style="background-color: #ECECEC;">
								<li class="active"><a href="#online-stream" data-toggle="tab">Online</a>
								</li>
								<li class=""><a href="#offine-stream" data-toggle="tab">Offline</a>
								</li>
								<li class=""><a href="#all-stream" data-toggle="tab">All</a>
								</li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade  active in" id="online-stream">
									<h4>Online Streamers</h4>
									<p>Online Streamers will be here!</p>
								</div>
								<div class="tab-pane fade" id="offline-stream">
									<h4>Offline Streamers</h4>
									<p>Offline Streamers will be here!</p>

								</div>
								<div class="tab-pane fade" id="all-stream">
									<h4>All Streamers</h4>
									<p>All Streamers will be here!</p>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>


	</section>
	<!--End Services Section-->
	<!--parallax one-->
	<section id="Parallax-one">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 col-md-offset-2 ">
					<h2>Other Media</h2>
					<h4>
						<strong>
							Feel free to follow us on some of our other social media below!
						</strong>
					</h4>

				</div>

			</div>


		</div>
	</section>
	<!--./parallax one-->
	<!-- Pricing Section -->
	<section id="price-sec">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8 col-md-offset-2">

					<h2>Instagram</h2>
					<h4>
						<strong>
							#filter tho. COMING SOON.
						</strong>
					</h4>

				</div>

			</div>
		</div>
	</section>
	<!--End Pricing Section -->
	<!--parallax two-->
	<section id="Parallax-two">
		<div class="container">

			<div class="row text-center">
				<div class="col-md-8 col-md-offset-2 ">
					<h2>
						Made it!
					</h2>
					<h4>
						<strong>
							The bottom of the webpage! What a journey!
						</strong>
					</h4>
				</div>
			</div>


		</div>
	</section>
	<!--footer Section -->
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
