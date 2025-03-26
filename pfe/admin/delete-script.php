<?php
include "includes/config.php";
include_once "includes/common.php";
if (isset($_GET['circuitId'])){
    $circuitId = $_GET['circuitId'];    
    $common = new Common();
    $delete = $common->deleteTripById($connection,$circuitId);
    $delete1 = $common->deleteCircuitById($connection,$circuitId);
    if ($delete && $delete1){
        echo '<script>alert("trip has been deleted successfully !")</script>';
        echo '<script>window.location.href="indexx.php";</script>';
    }
    else{
    	echo '<script>alert("try again !")"</script>';
    }
}