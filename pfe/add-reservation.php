<?php 
include "includes/config.php";
include_once "includes/common.php";

$flight = $_POST['flight'];
$hotel = $_POST['hotel'];
$name = $_POST['nom'];
$email = $_POST['email'];
$number = $_POST['numClient'];
$add = $_POST['addClient'];
$mode = $_POST['modePaiment'];
$places = $_POST['places'];


$common = new common();
$common->addClient($connection,$name,$email,$add,$number);
$clientId = $connection->insert_id;
$common->addReservation($connection,$places,$mode,$clientId,$flight,$hotel);
echo '<script>alert("Your Reservation has been added succesfully !")</script>';
echo '<script>window.location.href="indecs.php";</script>';


 ?>