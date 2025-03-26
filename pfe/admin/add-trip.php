<!DOCTYPE html>
<html>
<head>
	<<meta charset="UTF-8">
    <title>SideBar Menu</title>
    <link rel="stylesheet" href="styles11.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!--pour le hover de menu-->

    <script>
    $(document).ready(function(){
      $(".hamburger .hamburger__inner").click(function(){
        $(".wrapper").toggleClass("active")
      })

      $(".top_navbar .fas").click(function(){
         $(".profile_dd").toggleClass("active");
      });
    })
  </script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
       TopTrip Agence
      </div>
      <div class="right_menu">
        <ul>
          <li><i class="fas fa-user"></i>
            <div class="profile_dd">
               <div class="dd_item">
                <a href="logout.php" style="color:#630e9f">Logout</a></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
    
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <ul>
              <li>
                <a href="index1.php" >
                  <span class="icon"><i class="fas fa-ticket-alt"></i></span>
                  <span class="title">Reservation</span>
                </a>
              </li>
              <li>
                <a href="indexx1.php">
                  <span class="icon"><i class="fas fa-envelope"></i></span>
                  <span class="title">Message</span>
                </a>
              </li>
              <li>
                <a href="indexx.php" >
                  <span class="icon"><i class="fas fa-trash-alt"></i></span>
                  <span class="title">Delete</span>
                </a>
              </li>
              <li>
                <a href="modadd.php" class="active">
                  <span class="icon"><i class="fas fa-edit"></i></span>
                  <span class="title">Modify</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
	<div class="container">
		<div class="row ">
		<form action="add-script.php" method="POST">
			<?php 
			include "includes/config.php";
			include_once "includes/common.php";
        	$common = new Common();
            	$tourOperators = $common->getAllTourOperator($connection);
        	$villes = $common->getAllCities($connection);
        	$villes1 = $common->getAllCities($connection);
			?>
			<div class="form-group">
				<label for="touroperator">tour operator</label><br><br>
				<select name="touroperator">
				<?php
					if($tourOperators->num_rows>0){
						while ($tourOperator = $tourOperators->fetch_object()) {
							$op=$tourOperator->NomTourOperateur;
				?>
							<option value=" <?php echo $op; ?> ">
								<?php echo $op; ?>
							</option>
				<?php
						}
					}
				?>
				</select>
			
			</div>
		
			<div class="form-group">
				<label for="depart" style="padding-left: 15px;">Departing</label><br><br>
				<select name="depart">
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
			</div>
			<div class="form-group">
				<label for="arrive">Arriving</label><br><br>
				<select name="arrive">
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
			</div><br>
			<div class="form-group1">
				<label for="traveltime">Travel time</label><br><br>
				<input type="text"  name="traveltime" required>
			</div>
			<div class="form-group1">
				<label for="places">Places</label><br><br>
				<input type="text"  name="places" required>
			</div><br><br>
			<div class="form-group2">
				<label for="price">Price</label><br><br>
				<input type="text"  name="price" required>
			</div>
				<div class="form-group">
			<label for="departdate">Departing date</label><br><br>
			<input type="date" name="departdate" required>
			</div><br>
			<div class="form-group2">
				<label for="description">Description</label><br><br>
				<textarea required/ ></textarea> 
			</div>

			<input type="submit" value="Add" name="adding" style="padding-left: 0;margin-left: 38%;">
		</form>

     </div>
	</div>
</div>
</div>
</body>
</html>