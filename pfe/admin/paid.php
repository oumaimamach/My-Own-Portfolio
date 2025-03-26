<?php
include "includes/config.php";
include_once "includes/common.php";
if (isset($_GET['reservationId'])){
    $reservationId = $_GET['reservationId'];
    $common = new Common();
    $paid = $common->paidDate($connection,$reservationId);
    if ($paid){
        echo '<script>alert("reservation has been paid successfully !")</script>';
        echo '<script>window.location.href="index1.php";</script>';
    }
    else{
    	echo '<script>alert("try again !")"</script>';
    }
}
?>