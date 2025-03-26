<?php
include "includes/config.php";
include_once "includes/Common.php";
    
    $circuitId = $_POST['circuitId']; 
    $operator = $_POST['operator'];
    $departdate = $_POST['departdate'];
    $depart = $_POST['depart'];
    $arrive = $_POST['arrive'];
    $traveltime = $_POST['traveltime'];
    $places = $_POST['places'];
    $price = $_POST['price'];

    if(!empty($operator) || !empty($departdate) || !empty($depart) || !empty($arrive) || !empty($traveltime) || !empty($places) || !empty($price)){
        $common = new Common();
        $common->modifyCircuit($connection,$depart,$arrive,$traveltime,$price,$circuitId);
        $common->modifyTrip($connection,$operator,$departdate,$places,$circuitId);
        echo '<script>alert("trip has been modified successfully !")</script>';
        echo '<script>window.location.href="modadd.php";</script>';
    }

?>