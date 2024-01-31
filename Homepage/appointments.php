<?php
	include('assets/script/session_timer.php');
	include('assets/script/conn/db_connect.php');
	include('assets/script/fetch_all_sched.php');
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Registrar Appointment Manager</title>
	<meta charset="utf-8">
	<meta name="keywords" content="Shivaa" />
    <meta name="description" content="Shivaa" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- FavIcon Link -->
	<link rel="icon" href="assets/images/ramfavicon.png" type="image/gif" sizes="16x16">

	<!-- Bootstrap CSS Link -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<!-- Font Awesome Icon CSS Link -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

	<!-- Slick Slider CSS Link -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

	<!-- Wow Animation CSS Link -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

	<!-- Main Style CSS Link -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

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

	<!-- Header Start -->
	<header class="site-header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="header-box">
						<div class="site-branding">
							<!-- Logo Home Button -->
							<a href="home.php" title="">
								<img src="assets/images/ramlogosmall-txt.png">
							</a>
						</div>
						<div class="header-menu">
							<nav class="main-navigation">
								<button class="toggle-button">
									<span></span>
									<span></span>
									<span></span>
								</button>
								<ul class="menu">
									<li class="active"><a href="home.php" title="Home">Home</a></li>
									<li><a href="appointments.php" title="About Us">Appointments</a></li>
									<!-- <li><a href="services.html" title="Services">Services</a></li>
									<li><a href="contact.html" title="Contact Us">Contact Us</a></li> -->
								</ul>
							</nav>
							<div class="black-shadow"></div>
						</div>
						<div class="header-search">
							<form method="POST" action="assets/script/logout.php">
								<input class="sec-btn" type="submit" name="logout" title="Logout" value="Logout">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	<!-- Body Start -->
	<section class="main-banner" id="main-banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div>
						<div class="row">
							<h2 class="title-appointmens">Appointments</h2>
						</div>
						
						<div class="row">
							<table class="table">
							    <tr>
							    	<th scope="col">#</th>
							        <th scope="col">Reference ID</th>
							        <th scope="col">Name</th>
							        <th scope="col">Date of Appointment</th>
							        <th scope="col">Time of Appointment</th>
							        <th scope="col">Purpose of Visit</th>
							        <th scope="col">Status</th>
							        <th scope="col">Action</th>
							    </tr>
							    
							    <?php while ($row = $result->fetch_assoc()): ?>
							    <tr<?php echo ($row['status'] == 2) ? ' class="no-show"' : ''; ?>>
							    	<th scope="row"><?php echo $row['id']; ?></th>
							        <td><?php echo $row['reference_id']; ?></td>
							        <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
							        <td><?php echo $row['scheduled_date']; ?></td>
							        <td><?php echo $row['start_time']. ' - ' .$row['end_time']; ?></td>
							        <td><?php echo $row['purpose']; ?></td>
								    <td><?php 
									    if ($row['status'] == 0) {
								            echo "Pending";
								        } else if ($row['status'] == 1)  {
								            echo "No Show";
								        } else if ($row['status'] == 2) {
								            echo "Complete"; 
								        }
								        else {
								            echo "Unknown Status";
								        }
									   ?></td>
							        
							        <td>
							        <!-- Change the path to status_update.php -->
							        	<form method="post" action="assets/script/status_update.php">
							        	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
							            <button type="submit" class="btn btn-success" name="complete">
							            	 COMPLETE
							            </button>
							            <button type="submit" class="btn btn-danger" name="noShow">No Show</button>
							            </form>
							        </td>
							        <!-- Add more cells as needed -->
							    </tr>
							    <?php endwhile; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
	<!-- Body End -->


<!-- Footer Start -->
<footer>
	<div class=" footer-last">
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
</footer>
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
	<!-- Bubbles Animation End-->
</div>


<!-- Jquery JS Link -->
<script src="assets/js/jquery.min.js"></script>

<!-- Banner Moving Js Link -->
<script src="assets/js/bg-moving.js"></script>

<!-- Bootstrap JS Link -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>

<!-- Slick Slider JS Link -->
<script src="assets/js/slick.min.js"></script>	

<!-- Portfolio Tabbing JS Link -->
<script src="assets/js/jquery.mixitup.min.js"></script>	

<!-- Wow Animation JS Link -->
<script src="assets/js/wow.min.js"></script>

<!-- Custom JS Link -->
<script src="assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/custom-scroll-count.js"></script>
<script src="assets/js/session_timeout.js"></script>

</body>
</html>