<?php
include "includes/config.php";
include_once "includes/common.php";
if (isset($_GET['reservationId']) && isset($_GET['numPerson']) && isset($_GET['hotelName'])){
    $reservationId = $_GET['reservationId'];
    $numPerson = $_GET['numPerson'];
    $hotelName = $_GET['hotelName'];
    $common = new Common();
    $delete = $common->deleteReservationById($connection,$reservationId,$numPerson,$hotelName);
    if ($delete){
        echo '<script>alert("reservation deleted successfully !")</script>';
        echo '<script>window.location.href="index1.php";</script>';
    }
    else{
    	echo '<script>alert("try again !")"</script>';
    }
}