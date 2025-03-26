<?php
class Common
{
    public function getAllTrips($connection) {
        $query = "SELECT * FROM voyage";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function getAllCircuits($connection) {
        $query = "SELECT * FROM circuit";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
    public function getAllTourOperator($connection){
        $query= "SELECT NomTourOperateur FROM touroperateur";
        $result = $connection->query($query) or die("Error in query".$connection->error);
        return $result;
    }
    public function getAllCities($connection){
        $query= "SELECT nomVille FROM ville";
        $result = $connection->query($query) or die("Error in query".$connection->error);
        return $result;
    }
    public function deleteTripById($connection,$circuitId){
    	$query= "DELETE FROM `voyage` WHERE idCircuit='".$circuitId."';";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function deleteCircuitById($connection,$circuitId){
        $query= "DELETE FROM `circuit` WHERE idCircuit='".$circuitId."';";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
    public function insertIntoCircuit($connection,$depart,$arrive,$traveltime,$price,$description){
        $query= "INSERT INTO `circuit` (`descriptif`, `villeDepart`, `villeArrivee`, `dureeCircuit`, `prix`) VALUES ('".$description."', '".$depart."', '".$arrive."', '".$traveltime."','".$price."');";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function insertIntoTrip($connection,$touroperator,$departdate,$places,$idCircuit){
        $query= "INSERT INTO voyage(`dateDepart`, `nbPlaces`, `NomTourOperateur`, `idCircuit`)  VALUES ('".$departdate."','".$places."','".$touroperator."','".$idCircuit."')";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
    public function getTripInfo($connection,$circuitId) {
        $query = "SELECT * FROM voyage WHERE idCircuit=".$circuitId."";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function getCircuitInfo($connection,$circuitId) {
        $query = "SELECT * FROM circuit WHERE idCircuit=".$circuitId."";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
    public function modifyTrip($connection,$operator,$departdate,$places,$circuitId){
        $query= "UPDATE `voyage` SET `dateDepart`='".$departdate."',`nbPlaces`=".$places.",`NomTourOperateur`='".$operator."' WHERE `idCircuit`=".$circuitId."";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function modifyCircuit($connection,$depart,$arrive,$traveltime,$price,$circuitId){
        $query= "UPDATE `circuit` SET `villeDepart`='".$depart."',`villeArrivee`='".$arrive."',`dureeCircuit`=".$traveltime.",`prix`=".$price." WHERE `idCircuit`=".$circuitId."";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
}
?>