<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TRAVEL A - SUCCESS</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">

</head>

<body id="img-bg" class="d-flex flex-column h-100">

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-light sticky-top white-bg border-bottom border-medium">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<h3>TRAVEL A</h3>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">TICKETS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">HOTELS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">PACKAGES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">RESORTS</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- BANNER -->
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="row align-items-center">
				<div class=" offset-lg-3 col-lg-6 offset-sm-3 col-sm-6 text-center">
					<h1 class="banner-text align-middle">Thank you for sending us your trip!</h1>
				</div>
			</div>
			<div class="row">
				<div class=" offset-lg-3 col-lg-6 offset-sm-3 col-sm-6 text-center">
					<h1 class="banner-text">Soon one of our attendants will call you.</h1>
				</div>
			</div>

		</div>
	</div>


	<!--- FOOTER -->
	<footer class="footer mt-auto">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-10 offset-md-0 offset-1  d-flex align-items-center">
					<div class="little-text">TRAVEL A | All rights reserved. <span>contact@travela.com | +55
							(35) 3621-4551</span></div>
				</div>
				<div class="col-lg-2 col-md-4 offset-lg-2 d-flex evenly">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</footer>



</body>

</html>

<?php

require_once('db_class.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$dateTo = $_POST['dateTo'];
$dateFrom = $_POST['dateFrom'];
$tnumber = $_POST['tnumber'];

$objDb = new db();
$link = $objDb->connect_mysql();

$sql = " insert into travels(name, phone, origin, destination, dateTo, dateFrom, tnumber) values ('$name', '$phone', '$origin', '$destination', '$dateTo', '$dateFrom', '$tnumber')";

//run the query
mysqli_query($link, $sql);

?>