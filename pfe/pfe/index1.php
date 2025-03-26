<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/bootstrap1.css" rel='stylesheet' type='text/css'/>
<link href="css/style11.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
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
			<a class="nav-link" href="indecs.php" ><i class="fa fa-bookmark"></i>Reservation</a></li>
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
			<a class="nav-link active" href="#contact us" ><i class="fa fa-commenting"></i>contact us</a>
		</li>
			<script type="text/javascript">
			$("a").click(function(){ 
				$("a").css("background-color","");
			$(this).css("background"," #ef8454");});
		</script>
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

<!--sticky-->
<?php include('function.php'); ?>
<!--/About-->
<!--top-tours-->

<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt="" /><span></span><br /><br />
          <h4 style="color:#ccc">Plan Your Trip
Our travel experts can help you book now!</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#ef8454">TopTrip Agence</h4>
						<p style="color:#ccc">NEED HELP BOOKING PACKAGE<br/>
                        For fantastic suggestions you may also call our travel expert</p>
						<h5 style="color:#ccc"><span class="img1"></span>(+212) 25480012&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;0625480012</h5>
						<h5 style="color:#ccc"><span class="img2"></span><a href="#">www.code-projects.org&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;www.code-projects.org</a></h5>
						<h5 style="color:#ccc"><span class="img3"></span>YOUR LOCATION</h5>
                        <br/>
                      </div>
				  <div class="col-md-8 contact">

                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>

					  <tr><td><input type="submit" value="Send message"   name="sbmt"  > </td></tr></table>

					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
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
