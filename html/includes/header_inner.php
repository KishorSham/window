<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mysuru Masala</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/nav.js"></script>
</head>
<header class="navbar-fixed-top">
	<div id="mm-navbar">
		<div class="container-fluid">
			<div class="row row2">
				<div class="col-xs-12 hidden-md hidden-sm hidden-lg">
					<img src="images/logo4.png" class="mlogo hidden-md hidden-sm hidden-lg">
					<div class="col-md-7 mm-navbar-search smallsearch  col-xs-10">
						<input class="mm-navbar-input col-xs-11" type="text" placeholder="Search for Hotels" name="text">
						<button class="mm-navbar-button col-xs-1">
							<svg width="15px" height="15px">
								<path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
							</svg>
						</button>
					</div>
				</div>
				<div class="col-md-2">
					<h2 class="hidden-md hidden-sm hidden-lg" style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰</span>
						<a href="#" data-toggle="modal" data-target="#login-modal">
							<span class="glyphicon glyphicon-user hidden-md hidden-sm hidden-lg left-p right">Hotelier</span>
						</a>
						<span class="glyphicon glyphicon-map-marker hidden-md hidden-sm hidden-lg left-p right"></span>
					</h2>
					<img src="images/logo4.png" class="img-responsive logo hidden-xs hidden-sm" alt="logo">
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12 mm-navbar-search smallsearch lept-p col-xs-12 hidden-xs">
							<input class="mm-navbar-input col-xs-11" type="text" placeholder="Search for Hotels" name="text">
							<button class="mm-navbar-button col-xs-1">
								<svg width="15px" height="15px">
									<path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
								</svg>
							</button>
						</div>
						<!-- <div class=" col-md-3 cart largenav hidden-xs">
							<ul class="list-inline right">
								<li><span class="glyphicon glyphicon-map-marker"></span> Location</li>
							 <li>Are you a hotelier</li>
								 <li><a href="#" data-toggle="modal" data-target="#login-modal1"><span class="glyphicon glyphicon-user"></span> Are you a hotelier</a></li> 
							</ul> 
						</div> -->	
					</div>
					<div class="row hidden-xs">
						<div class="col-md-12">
							<nav class="navbar navbar-inverse">
								<div class="container-fluid">
									<div class="collapse navbar-collapse" id="myNavbar">
										<ul class="nav navbar-nav">
											<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
											<li><a href="hotellist.php"><span class="glyphicon glyphicon-list"></span> List of Hotels</a></li>
											<li><a href="login.php"><span class="glyphicon glyphicon-file"></span> MM World</a></li> 
											<li><a href="hotdeals.php"><span class="glyphicon glyphicon-fire"></span> Hot Deals</a></li> 
											<li><a href="pakashala.php"><span class="glyphicon glyphicon-cutlery"></span> Pakashala</a></li> 
											<li><a href="orderonline.php"><span class="glyphicon glyphicon-shopping-cart"></span> Order Online</a></li> 
										</ul>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>

				<div class="col-md-2 top-p ">
					<div class="hidden-xs hidden-sm hidden-md">
					<p><a href="" class="tcolor"><span class="glyphicon glyphicon-map-marker"></span> Location</a></p>	
					<p><a href="#" data-toggle="modal" data-target="#login-modal1" class="tcolor"><span class="glyphicon glyphicon-user"></span> Are you a hotelier</a></p>
				</div>



					<!-- <ul class="list-inline right">
								<li></li>
								<li>Are you a hotelier</li>
								<li></li>
							</ul> -->
				</div>

			</div>
		</div>
	</div>
	<div id="mySidenav" class="sidenav">
		<div class="" style="background-color: #102d5d; padding: 10px;">
			<a href="index.php"><span class="sidenav-heading glyphicon glyphicon-home"></span></a>
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		</div>
		<a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
		<a href="hotellist.php"><span class="glyphicon glyphicon-list"></span> List of Hotels</a>
		<a href="login.php"><span class="glyphicon glyphicon-file"></span> MM World</a> 
		<a href="hotdeals.php"><span class="glyphicon glyphicon-fire"></span> Hot Deals</a> 
		<a href="pakashala.php"><span class="glyphicon glyphicon-cutlery"></span> Pakashala</a> 
		<a href="orderonline.php"><span class="glyphicon glyphicon-shopping-cart"></span> Order Online</a> 

	</div>
</header>




