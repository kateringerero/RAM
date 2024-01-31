<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Registrar Appointment Manager</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- FavIcon Link -->
	<link rel="icon" href="" type="image/gif" sizes="16x16">

	<!-- Bootstrap CSS Link -->
	<link rel="stylesheet" type="text/css" href="Homepage/assets/css/bootstrap.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<!-- Font Awesome Icon CSS Link -->
	<link rel="stylesheet" type="text/css" href="Homepage/assets/css/font-awesome.min.css">

	<!-- Slick Slider CSS Link -->
	<link rel="stylesheet" type="text/css" href="Homepage/assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="Homepage/assets/css/slick-theme.css">

	<!-- Wow Animation CSS Link -->
	<link rel="stylesheet" type="text/css" href="Homepage/assets/css/animate.css">

	<!-- Main Style CSS Link -->
	<link rel="stylesheet" type="text/css" href="Homepage/assets/css/style.css">

</head>
<body class="home">
<div class="main">

	<!-- Loder Start -->
	<div class="loader-box">
		<div class="loader-design">
			<svg class="gegga">
				<defs>
					<filter id="gegga">
						<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 20 -10" result="inreGegga" />
						<feComposite in="SourceGraphic" in2="inreGegga" operator="atop" />
					</filter>
				</defs>
			</svg>
			<svg class="snurra" width="200" height="200" viewBox="0 0 200 200">
				<defs>
					<linearGradient id="linjärGradient">
						<stop class="stopp1" offset="0" />
						<stop class="stopp2" offset="1" />
					</linearGradient>
					<linearGradient y2="160" x2="160" y1="40" x1="40" gradientUnits="userSpaceOnUse" id="gradient" xlink:href="#linjärGradient" />
				</defs>
				<path class="halvan" d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"
				/>
				<circle class="strecken" cx="100" cy="100" r="64" />
			</svg>
			<svg class="skugga" width="200" height="200" viewBox="0 0 200 200">
				<path class="halvan" d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"
				/>
				<circle class="strecken" cx="100" cy="100" r="64" />
			</svg>
		</div>
	</div>
	<!-- Loder End -->

	<!-- Banner Start -->
	<section class="main-banner" id="main-banner">
		<div class="sec-shape">
			<span class="shape shape1 animate-this"><img src="Homepage/assets/images/shape1.png" alt="Shape"></span>
			<span class="shape shape2 animate-this"><img src="Homepage/assets/images/shape2.png" alt="Shape"></span>
			<span class="shape shape3 animate-this"><img src="Homepage/assets/images/shape3.png" alt="Shape"></span>
			<span class="shape shape4 animate-this "><img src="Homepage/assets/images/shape2.png" alt="Shape"></span>
			<span class="shape shape5 animate-this"><img src="Homepage/assets/images/shape1.png" alt="Shape"></span>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="main-banner-slider wow fadeup-animation" data-wow-delay="0.6s">
						<div class="banner-slider">
							<div class="banner-img back-img" style="background-image: url('Homepage/assets/images/2.png');"></div>
							<div class="banner-img back-img" style="background-image: url('Homepage/assets/images/2.png');"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="banner-content">
						<span class="sub-title wow fadeup-animation" data-wow-delay="0.4s">Registrar Appointment Manager</span>
						<h1 class="h1-title wow fadeup-animation" data-wow-delay="0.5s">You set the date, we'll coordinate</h1>
						<p class="wow fadeup-animation" data-wow-delay="0.6s">Schedule your appointment now!</p>
						<div class="col-sm-12">
							<form id="loginForm" action="Homepage/assets/script/login.php" method="POST">
								
								<label for="user_id">Username:</label>
			                    <div>
			                        <input class="form form-control" type="text" id="user_id" name="user_id" required placeholder="Enter User ID">
			                    </div>
			                    <br>
			                    <label for="password">Password:</label>
			                    <div>
			                        <input class="form form-control" type="password" id="password" name="password" required placeholder="Enter Password">
			                    </div>
			                    <br>
			                    <div class="row">
			                    	<div class="col-sm-4"></div>
			                    	<div class="col-sm-8">
										<input value="Sign In" type="submit" class="sec-btn" width="100%">
									</div>
								</div>
								<!-- <div class="row">
									<div class="col-sm-6"></div>
									<div class="col-sm-6">
										<label>Don't have an account? <a href="signup.php">Sign up</a></label>
									</div> -->
								</div>
							</form>
						</div>
						<br>
						<!-- <div class="banner-call wow fadeup-animation" data-wow-delay="0.8s">
							<a href="javascript:void(0);" title="Call on +91 987 654 321"><span class="icon"><img src="Homepage/assets/images/call-icon.png" alt="Call Icon"></span>Call Now:<span>+63 930 842 7452</span></a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->

	<!-- Footer Start -->
	<div class="footer-last">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="copy-right">
						<p>Copyright © 2023 <a href="" target="_blank">Registrar Appointment Manager</a>. All rights reserved.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer-last-link">
						<ul>
							<li><a href="javascript:void(0);" title="Privacy Policy">Privacy Policy</a></li>
							<li><a href="javascript:void(0);" title="Terms Of Service">Terms Of Service</a></li>
							<li><a href="javascript:void(0);" title="Legal">Legal</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Scroll To Top Start -->
	<a href="#main-banner" class="scroll-top" id="scroll-to-top">
		<i class="fa fa-arrow-up" aria-hidden="true"></i>
	</a>
	<!-- Scroll To Top End-->

	<!-- Bubbles Animation Start -->
	<div class="bubbles_wrap">
		<div class="bubble x1"></div>
		<div class="bubble x2"></div>
		<div class="bubble x3"></div>
		<div class="bubble x4"></div>
		<div class="bubble x5"></div>
		<div class="bubble x6"></div>
		<div class="bubble x7"></div>
		<div class="bubble x8"></div>
		<div class="bubble x9"></div>
		<div class="bubble x10"></div>
	</div>
	<!-- Bubbles Animation End -->
</div>


<!-- Jquery JS Link -->
<script src="Homepage/assets/js/jquery.min.js"></script>

<!-- Banner Moving Js Link -->
<script src="Homepage/assets/js/bg-moving.js"></script>

<!-- Bootstrap JS Link -->
<script src="Homepage/assets/js/bootstrap.min.js"></script>
<script src="Homepage/assets/js/popper.min.js"></script>

<!-- Slick Slider JS Link -->
<script src="Homepage/assets/js/slick.min.js"></script>	

<!-- Portfolio Tabbing JS Link -->
<script src="Homepage/assets/js/jquery.mixitup.min.js"></script>	

<!-- Wow Animation JS Link -->
<script src="Homepage/assets/js/wow.min.js"></script>

<!-- Custom JS Link -->
<script src="Homepage/assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="Homepage/assets/js/custom.js"></script>
<script src="Homepage/assets/js/custom-scroll-count.js"></script>

</body>
</html>