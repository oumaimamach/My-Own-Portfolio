<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SideBar Menu</title>
    <link rel="stylesheet" href="styles11.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <a href="indexx.php">
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
        <table class="table table-dark table-hover table-bordered">
            <thead id="thead" style="background-color:#222">
            <tr>
                <th>#</th>
                <th>tour operator</th>
                <th>departing date</th>
                <th>departing city</th>
                <th>arriving city</th>
                <th>travel time</th>
                <th>place remaining</th>
                <th>price</th>
                <th style="padding-left: 35px;">action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include "includes/config.php";
            include_once "includes/common.php";
            $common = new Common();
             $Trips = $common->getAllTrips($connection);
            if ($Trips->num_rows>0){
                $sr = 1;
                while ($Trip = $Trips->fetch_object()) {
                  $circuitId= $Trip->idCircuit;
                    $departcity= $Trip->villeDepart;
                    $arrivecity= $Trip->villeArrivee;
                    $traveltime= $Trip->dureeCircuit;
                    $price= $Trip->prix;
                    $touroperator = $Trip->NomTourOperateur;
                    $departdate= $Trip->dateDepart;
                    $places = $Trip->nbPlaces;
?>
                    <tr>
                        <th><?php echo $sr;?></th>
                        <th><?php echo $touroperator;?></th>
                        <th><?php echo $departdate;?></th>
                        <th><?php echo $departcity;?></th>
                        <th><?php echo $arrivecity;?></th>
                        <th><?php echo $traveltime;?></th>
                        <th><?php echo $places;?></th>
                        <th><?php echo $price;?></th>
                        <td style="padding-left: 20px;"><a href="modify.php?circuitId=<?php echo $circuitId ?>" class="btn btn-light btn-sm">modify</a></td>
                    </tr>
                    <?php
                    $sr++;
                    
                }
            }
            ?>
            </tbody>
        </table>
        <center><a href="add-trip.php?circuitId=<?php echo $circuitId ?>" class="btn btn-secondary btn-sm">Add</a></center>
    </div>
  </div>
</div>
</body>
</html>