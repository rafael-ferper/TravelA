<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TRAVEL A - HOME</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBDKDw22quZGnOuI8EAETr_LEuh9twwY44"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">

</head>

<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-light white-bg border-bottom border-medium">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<h3>TRAVEL A</h3>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">TICKETS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">HOTELS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">PACKAGES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">RESORTS</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- BANNER -->
	<div class="container-fluid bg d-flex justify-content-center flex-column">
		<div class="row">
			<div class="col-lg-12 col-sm-12 text-center">
				<h1 class="banner-text">Now, traveling is easier and cheaper with Travel A.</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 text-center">
				<a href="#form"><button type="button" class="btn banner-btn">Try It Now</button></a>
			</div>
		</div>
	</div>

	<!--- TWO COLUMN SECTION -->
	<div class="container whitespace" id="form">
		<div class="row">
			<div class="col-lg-6">

				<!--FORM -->
				<form method="post" class="border border-medium p-5 white-bg" name="tform" id="tform" action="success.php">

					<p class="h4 mb-4 text-center">Create your next travel:</p>

					<!-- Name -->
					<div class="row">
						<div class="col-lg-12">
							<input type="text" class="form-control" placeholder="Your Name" name="name" id="name">
						</div>
					</div>
					<!-- Phone -->
					<div class="row">
						<div class="col-lg-12">
							<input type="text" class="form-control" placeholder="Your Phone" name="phone" id="phone">
						</div>
					</div>

					<!-- Origin -->
					<div class="row">
						<div class="col-lg-12">
							<input type="text" class="form-control" placeholder="Your Origin" name="origin" id="origin">
						</div>
					</div>

					<!-- Destination -->
					<div class="row">
						<div class="col-lg-12">
							<input type="text" class="form-control" placeholder="Your Destination" name="destination" id="destination">
						</div>
					</div>

					<!-- Date to -->
					<div class="row ">
						<div class="col-lg-4 col-md-5 col-12 d-flex align-items-center">
							<label>Date To:</label>
						</div>
						<div class="col-lg-6  date offset-lg-2 col-md-5 offset-md-2 col-12">
							<input type="date" class="form-control" name="dateTo" id="dateTo">
						</div>
					</div>



					<!-- Date from -->
					<div class="row ">
						<div class="col-lg-4 col-md-5 col-12 d-flex align-items-center">
							<label>Date From:</label>
						</div>
						<div class="col-lg-6  date offset-lg-2 col-md-5 offset-md-2 col-12">
							<input type="date" class="form-control" name="dateFrom" id="dateFrom">
						</div>
					</div>

					<!-- Travelers Number -->
					<div class="row ">
						<div class="col-lg-5 col-md-9 col-7 d-flex align-items-center">
							<label>Travelers Number:</label>
						</div>
						<div class="col-lg-3 col-md-3 offset-lg-4 col-5">
							<input type="number" min="1" class="form-control" name="tnumber" id="tnumber">
						</div>
					</div>

					<!-- Submit -->
					<div class="row">
						<div class="col-lg-12">
							<button class="btn btn-main btn-block my-4" id="margin" type="submit">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<!-- TEXT -->
			<div class="col-lg-5 offset-lg-1">
				<div class="row">
					<div class="col-lg-12">
						<h1>About Travel A</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="text-justify">
						Travel A does everything for a good trip. That is why it works to
						 transform this experience into the best achievement of your life, 
						through new trends and a wide network of tourism products and services.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="text-justify">
						We format products and adapt the price of these products to customers' 
						ability to pay. We develop new national and international markets. We 
						encourage the development of local suppliers and receptives.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p class="text-justify">
						We would like to make tourism accessible to all people, offering quality 
						products and services at fair prices, dedicating ourselves daily 
						to making each client's dream come true.
						</p>
					</div>
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

	<!-- JQUERY MASK PLUGIN -->
	<script src="js/jquery.mask.min.js"></script>
	<!-- JQUERY VALIDADE PLUGIN -->
	<script src="js/jquery.validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/myjs.js"></script>

</body>

</html>