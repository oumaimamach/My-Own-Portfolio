<?php
include "includes/config.php";
include "includes/common.php";
$touroperator = $_POST['touroperator'];
$departdate = $_POST['departdate'];
$depart = $_POST['depart'];
$arrive = $_POST['arrive'];
$traveltime = $_POST['traveltime'];
$places = $_POST['places'];
$price = $_POST['price'];
$description = $_POST['description'];

	if(!empty($touroperator) || !empty($departdate) || !empty($depart) || !empty($arrive) || !empty($traveltime) || !empty($places) || !empty($price) || !empty($description)){
		$common = new Common();
		$common->insertIntoCircuit($connection,$depart,$arrive,$traveltime,$price,$description);
		$idCircuit = $connection->insert_id;
		$common->insertIntoTrip($connection,$touroperator,$departdate,$places,$idCircuit);
		echo '<script>alert("trip has been added successfully !")</script>';
        echo '<script>window.location.href="modadd.php";</script>';
	}
?>