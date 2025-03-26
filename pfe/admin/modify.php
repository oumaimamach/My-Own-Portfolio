<!DOCTYPE html>
<html>
<head>
	<title>Modify trip</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <link rel="stylesheet" href="styles1.css">
	<style>
        #thead>tr>th{ color: white; }
    </style>
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
<body style="background: url('../admin/bg.jpg') no-repeat; 
           background-size: cover; background-attachment: fixed;">
	<div style="margin-top: 15%;padding-bottom: 20px;">
   		<center>
        	<h3>Trips</h3>
    	</center>
	</div>
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
  </div></div>
	<?php
	include "includes/config.php";
	include_once "includes/common.php";
	if (isset($_GET['circuitId'])){
		$circuitId=$_GET['circuitId'];
		$common = new Common();
        $tourOperators = $common->getAllTourOperator($connection);
        $villes = $common->getAllCities($connection);
        $villes1 = $common->getAllCities($connection);
        $row = mysqli_fetch_row($common->getTripInfo($connection,$circuitId));
        $row1 = mysqli_fetch_row($common->getCircuitInfo($connection,$circuitId));
		?>
		<div class="container">
    		<table class="table  table-hover table-bordered table-responsive-xl">
        		<thead id="thead" style="background-color: #222">
        			<tr>
            			<th>tour operator</th>
			            <th style="padding-left:25px;">departing date</th>
			            <th>departing city</th>
			            <th style="padding-left:15px;">arriving city</th>
			            <th style="padding-left:50px ;">travel time</th>
        			    <th style="padding-left:35px ;">place remaining</th>
			            <th style="padding-left:80px ;">price</th>
          				<th style="padding-left: 20px ;">action</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
                <form action="Modify-script.php" method="POST">
                <th>
                  <div>
                <select name="operator">
                  <option value="<?php echo$row[2]?>" ><?php echo$row[2]?> </option>
<?php
                  if($tourOperators->num_rows>0){
                    while ($tourOperator = $tourOperators->fetch_object()) {
                      $op=$tourOperator->NomTourOperateur;
?>
                      
                      <option value=" <?php echo$op;?> ">
                      <?php echo$op;?>
                      </option>
<?php
                    }
                  }
?>  
                </select>
              </div>
            </th>
            <th>
                  <div>
                <input type="date" value="<?php echo $row[0] ?>" name="departdate" placeholder="<?php echo $row[0] ?>" >
              </div>
                </th>
                <th>
                  <div>
                <select name="depart">
                  <option value="<?php echo$row1[2]?>" selected='selected'><?php echo$row1[2]?></option>
<?php
                  if($villes->num_rows>0){
                    while ($ville = $villes->fetch_object()) {
                      $departcity=$ville->nomVille;
  ?>
                      
                      <option value=" <?php echo$departcity;?> ">
                      <?php echo$departcity;?>
                      </option>
<?php
                    }
                  }
?>  
                </select>
              </div>
                </th>
                <th>
                  <div>
                <select name="arrive">
                  <option value="<?php echo$row1[3]?>" selected='selected'><?php echo$row1[3]?></option>
<?php
                  if($villes1->num_rows>0){
                    while ($ville = $villes1->fetch_object()) {
                      $arrivecity=$ville->nomVille;
  ?>
                      
                      <option value=" <?php echo$arrivecity;?> ">
                      <?php echo$arrivecity;?>
                      </option>
<?php
                    }
                  }
?>  
                </select>
              </div>
                </th>
                <th>
                  <div>
                <input type="text" placeholder="<?php echo $row1[4] ?>" value="<?php echo $row1[4] ?>"  name="traveltime" >
              </div>
                </th>
                <th>
                  <div>
                <input type="text" placeholder="<?php echo $row[1] ?>" value="<?php echo $row[1] ?>"  name="places" >
              </div>
                </th>
                <th>
                  <div>
                <input type="text" placeholder="<?php echo $row1[5] ?>" value="<?php echo $row1[5] ?>"  name="price" >
              </div>
                </th>
                <input type="hidden" name="circuitId" value="<?php echo $circuitId?>">
                <td><input type="submit" name="Confirm" value="Confirm" class="btn btn-secondary btn-sm"></td>
                </form>
              </tr>
        		</tbody>
        	</table>
        </div>
<?php

	}
?>
</body>
</html>