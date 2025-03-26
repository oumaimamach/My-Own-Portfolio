<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="search_flight11.css">
			<meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body><nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
	<a class="navbar-brand"href="#"><img src="images1/icn.png" width="200" height="150" class="d-inline-block align-top" alt="" />
		</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon">
	</span></button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto " >
			<li class="nav-item" > 
			<a class="nav-link " href="index.html"  ><i class="fa fa-home"  ></i>
			Home</a></li>
            <li class="nav-item"> 
			<a class="nav-link active" href="indecs.php" ><i class="fa fa-bookmark"></i>Reservation</a></li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#about"><i class="fa fa-question-circle"></i>about
            <span class="caret"></span>
			</a>
            <div class="dropdown-menu" aria-labelledby="dropdown_target">
            <a class="dropdown-item" href="aboutUs.html">Cities</a>	
             <a class="dropdown-item" href="activities.html">Activities</a>	
            <a class="dropdown-item" href="cul.html">Culture</a>
            <a class="dropdown-item" href="tra.html">Transport</a>
            </div>
		</li>
			<li class="nav-item"> 
			<a class="nav-link" href="index1.php" ><i class="fa fa-commenting"></i>contact us</a>
		</li>
			
		</ul>
	</div>
</div>
</nav>
<!-- image silder -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1" ></li>
        <li data-target="#slides" data-slide-to="2" ></li>
	</ul>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active"> <img src="images1/img11.jpg" class="img-responsive" />
			<div class="carousel-caption text-center"><h2 style="font-size:8vw;">Plan the perfect trip</h2>
         <h3 style="font-size:3vw;">With TopTrip</h3>
			</div>
		</div>
		<div class="carousel-item"> <img src="images1/wow.jpg" class="img-responsive" /></div>
		<div class="carousel-item"> <img src="images1/sahara.jpg" class="img-responsive" /></div>
		<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>
		<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>
</div>

		<div class="container1">
			<div class="box">
			<form action="checki.php" method="POST">
<?php 
			include "includes/config.php";
			include_once "includes/common.php";
			$common = new Common();
			$villes = $common->getAllCities($connection);
			$villes1 = $common->getAllCities($connection);
?>
			<div class="op1" id="ic1">
				<label for="villeDepart" >Flying From:</label><br><br>
				<select id="villeDepart" name="villeDepart" required style="width: 260px;padding-left: 30px; color: #ccc">
<?php 
					if($villes->num_rows>0){
						while ($ville = $villes->fetch_object()) {
							$departcity=$ville->nomVille;
?>									
							<option value=" <?php echo $departcity; ?> ">
							<?php echo $departcity; ?>
							</option>
<?php
						}
					}				
 ?>
				</select>
				<i class="fa fa-map-marker fa-lg fa-fw"></i>
			</div>

			<div class="op1" id="ic2">
				<label for="villeArrivee" >Flying To:</label><br><br>
				<select id="villeArrivee" name="villeArrivee" required style="width: 260px;padding-left: 30px; color: #ccc">
<?php 
					if($villes1->num_rows>0){
						while ($ville = $villes1->fetch_object()) {
							$arrivecity=$ville->nomVille;
?>									
							<option value=" <?php echo $arrivecity; ?> ">
							<?php echo $arrivecity; ?>
							</option>
<?php
						}
					}				
 ?>	
				</select>
				<i class="fa fa-map-marker fa-lg fa-fw"></i>
			</div><br>
			
			<div class="op2">
				<label for="dateDepart">departure</label><br><br>
				<input type="date" id="dateDepart" name="dateDepart" required >
				<i class="fa fa-calendar fa-lg fa-fw"></i>
			</div>
			
			<div class="op3">
				<label for="nbPersonnes">person numbers</label><br><br>
				<select id="nbPersonnes" name="nbPersonnes" required style="width: 50px;padding-left: 8px; color: #ccc ">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div><br>
			<input type="submit" value="search flight" style="padding-left: 0;margin-left: 38%;">
			</form>
		</div>
	</div>
	<section class="teal">
	<div class="container">
		<div class="row">
		<div class="col-md-3">
			<h4>AGENCY TOP TRIP</h4>
<p>Easy Top Trip Morocco offers all of its travel expertise to help you choose between 40 travel destinations from Morocco, as well as a wide selection of hotels and flights at the cheapest prices.</p>
		</div>
		<div class="col-md-3">
			<h4>Our Features</h4>
			<ul>Deals & Offers</ul>
			<ul>User Reviews</ul>
			<ul>cancelation policy</ul>
		</div>
		<div class="col-md-3">
			<h4>Quik Contact</h4>
			<ul><i class="fa fa-phone-square">+212 25480012</i></ul>
			<ul><i class="fa fa-envelope">TopTrip@example.com</i></ul>
			<ul><i class="fa fa-linkedin">Oumaima Machmachi</i></ul>
		</div>
		<div class="col-md-3">
			<h4>Follow Us</h4>
			<ul><a href="#"><i class="fa fa-facebook"></i></a> Facebook</ul>
			<ul><a href="#"><i class="fa fa-instagram"></i></a> Instagram</ul>
			<ul><a href="#"> <i class="fa fa-twitter"></i></a> Twitter</ul>
		</div>
	</div>
</div>
</section>
	</body>
</html>
