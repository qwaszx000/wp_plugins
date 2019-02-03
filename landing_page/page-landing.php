<?php
/**
Template Name: Landing page
**/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/landing/style.css" type="text/css"/>
</head>
<body>
		<header>
			<center>	
				<nav class="nav justify-content-center">
					<a href="#" class="nav-link">Home</a>
					<a href="#" class="nav-link">About Us</a>
					<a href="#" class="nav-link">Team</a>
					<a href="#" class="nav-link"><img src="<?php bloginfo( 'template_directory' ); ?>/landing/logo.png" alt="img" width="55" height="55"></a>
					<a href="#" class="nav-link">Services</a>
					<a href="#" class="nav-link">Blog</a>
					<a href="#" class="nav-link">Contact Us</a>
				</nav>
				<div class="container-fluid" id="read_more">
					<h3>We build it with passion</h3>
					<h4 class="text-muted">Just to be clear, we do this for fun not for you, just kidding</h4>
					<button class="btn btn-outline-dark">READ MORE</button>
				</div>
			</center>
		</header>
		<div id="about-us">
			<center>
				<div class="container-fluid">
					<div class="col-sm-6 d-flex flex-column text-right" id="right_col">
						<div>
							<h2 class="text-white">2011</h2>
							<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius, asperiores laboriosam.</h5>
						</div>
						<div id="margintop">
							<h2 class="text-white">2013</h2>
							<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius, asperiores laboriosam.</h5>
						</div>
						<div id="margintop">
							<h2 class="text-white">2015</h2>
							<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius, asperiores laboriosam.</h5>
						</div>
					</div>
					<div class="col-sm-6 d-flex flex-column text-left" id="left_col">
						<div id="margintop">
							<h2 class="text-white">2012</h2>
							<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius, asperiores laboriosam.</h5>
						</div>
						<div id="margintop">
							<h2 class="text-white">2014</h2>
							<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius, asperiores laboriosam.</h5>
						</div>
						<div id="margintop">
							<h2 class="text-white">2016</h2>
							<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius, asperiores laboriosam.</h5>
						</div>
					</div>
				</div>
			<center>
		</div>
		<div id="team">
			<center>
				<div class="container-fluid">
					<h3>This is our team</h3>
					<h4 class="text-muted">We are small but effective and ...</h4>
					<img src="<?php bloginfo( 'template_directory' ); ?>/landing/kwas.jpg" alt="" class="img-circle">
					<h3 class="text-dark">Alexander Ray</h3>
					<h5 class="text-muted">Full stack</h5>
				</div>
			</center>
		</div>
		<div id="services">
			<center>
				<div class="container-fluid">
					<h3 class="text-white">We provide you everything</h3>
					<h4 class="text-muted">Maybe not everything, but we provide you some stuff</h4>
				</div>
				<div id="services-list">
					<div class="col-sm-4">
						<h3 class="text-white">Some Analytics</h3>
						<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam?</h5>
					</div>
					<div class="col-sm-4">
						<h3 class="text-white">We provide you love</h3>
						<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam?</h5>
					</div>
					<div class="col-sm-4">
						<h3 class="text-white">And Some Cloud</h3>
						<h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam?</h5>
					</div>
				</div>
				<button class="btn btn-light" id="visit-blog-btn">Visit our blog</button>
			</center>
		</div>
		<div id="contact-us">
			<center>
				<div class="container-fluid">
					<h3>Contact Us</h3>
					<h4 class="text-muted"> We know what we need to do</h4>
					<div class="col-sm-4">
						<i class="fa fa-phone"></i>
						<h5 class="text-muted">555-222-333</h5>
					</div>
					<div class="col-sm-4">
						<i class="fas fa-map-marker-alt"></i>
						<h5 class="text-muted">Some address here</h5>
					</div>
					<div class="col-sm-4">
						<i class="material-icons">email</i>
						<h5 class="text-muted">kalita1303@gmail.com</h5>
					</div>
					<form>
						<input type="text" placeholder="Full Name" class="form-control input-dark"><br>
						<input type="email" placeholder="Email" class="form-control"><br>
						<input type="text" placeholder="Number" class="form-control"><br>
						<textarea placeholder="Write your message here..." class="form-control"></textarea><br>
						<button class="btn btn-dark">Submit</button><br>
					</form>
					Copyright Kenan Hamidic. All rights reserved.<br/>
					Created by Alexander Ray(kwas).
				</div>
			</center>
		</div>
</body>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</html>