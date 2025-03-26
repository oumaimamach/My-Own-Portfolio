<?php
class Common
{
    public function getAllTrips($connection) {
        $query = "SELECT * FROM voyage JOIN circuit ON voyage.idCircuit=circuit.idCircuit";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function getAllTourOperator($connection){
        $query = "SELECT NomTourOperateur FROM touroperateur";
        $result = $connection->query($query) or die("Error in query".$connection->error);
        return $result;
    }
    public function getAllCities($connection){
        $query = "SELECT nomVille FROM ville";
        $result = $connection->query($query) or die("Error in query".$connection->error);
        return $result;
    }
    public function deleteTripById($connection,$circuitId){
    	$query = "DELETE FROM `voyage` WHERE idCircuit='".$circuitId."';";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function deleteCircuitById($connection,$circuitId){
        $query = "DELETE FROM `circuit` WHERE idCircuit='".$circuitId."';";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
    public function insertIntoCircuit($connection,$depart,$arrive,$traveltime,$price,$description){
        $query= "INSERT INTO `circuit` (`descriptif`, `villeDepart`, `villeArrivee`, `dureeCircuit`, `prix`) 
        VALUES ('".$description."', '".$depart."', '".$arrive."', '".$traveltime."','".$price."');";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function insertIntoTrip($connection,$touroperator,$departdate,$places,$idCircuit){
        $query = "INSERT INTO voyage(`dateDepart`, `nbPlaces`, `NomTourOperateur`, `idCircuit`)  VALUES ('".$departdate."','".$places."','".$touroperator."','".$idCircuit."')";
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
        $query = "UPDATE `voyage` SET `dateDepart`='".$departdate."',`nbPlaces`=".$places.",`NomTourOperateur`='".$operator."' WHERE `idCircuit`=".$circuitId."";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function modifyCircuit($connection,$depart,$arrive,$traveltime,$price,$circuitId){
        $query= "UPDATE `circuit` SET `villeDepart`='".$depart."',`villeArrivee`='".$arrive."',`dureeCircuit`=".$traveltime.",`prix`=".$price." WHERE `idCircuit`=".$circuitId."";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
    public function getAllReservations($connection) {
        $query = "SELECT * FROM reservation";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteReservationById($connection,$reservationId,$numPerson,$hotelName) {
        $query0="UPDATE voyage INNER JOIN reservation ON voyage.idCircuit = reservation.idCircuit SET nbPlaces = nbPlaces+".$numPerson." WHERE reservation.ID=".$reservationId."; ";
        $result0 = $connection->query($query0) or die("Error in query2".$connection->error);
        $query1 ="UPDATE hotel SET nbrChambres = nbrChambres+1 WHERE nomHotel='".$hotelName."'";
        $result1 = $connection->query($query1) or die("Error in query1".$connection->error);
        $query = "DELETE FROM reservation WHERE ID='".$reservationId."'";
        $result = $connection->query($query) or die("Error in query3".$connection->error);
        return $result;
    }
    public function getAllMessages($connection) {
        $query = "SELECT * FROM contactus";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
    public function checkFlights($connection,$depart,$arrive,$departdate,$places){
        $query = "SELECT circuit.idCircuit, circuit.descriptif, circuit.dureeCircuit, circuit.prix FROM circuit INNER JOIN voyage ON circuit.idCircuit = voyage.idCircuit WHERE villeDepart='".$depart."' AND villeArrivee='".$arrive."' AND voyage.dateDepart='".$departdate."' AND voyage.nbPlaces-".$places.">=0";
        $result = $connection->query($query) or die("Error in query".$connection->error);
        return $result;
    }
    public function checkHotels($connection,$arrive){
        $query = "SELECT * FROM hotel WHERE nomVille='".$arrive."'";
        $result = $connection->query($query) or die("Error in query".$connection->error);
        return $result;
    }
    public function addClient($connection,$name,$email,$add,$number){
        $query = "INSERT INTO `client`(`FullName`, `addClient`, `email`, `Number`) VALUES ('".$name."','".$add."','".$email."','".$number."')";
        $result = $connection->query($query) or die("Error in query haaadi".$connection->error);
        return $result;
    }
    public function addReservation($connection,$places,$mode,$clientId,$flight,$hotel){
        $query0 ="UPDATE voyage SET nbPlaces = nbPlaces -'".$places."' WHERE idCircuit = '".$flight."';";
        $result0 = $connection->query($query0) or die("Error in query".$connection->error);
        $query1 ="UPDATE hotel SET nbrChambres = nbrChambres-1 WHERE nomHotel='".$hotel."'";
        $result1 = $connection->query($query1) or die("Error in query1".$connection->error);
        $query2 = "INSERT INTO `reservation`(`nbrpersonnes`, `dateReservation`, `modePaiement`, `numclient`, `idCircuit`, `nomHotel`) 
        VALUES ('".$places."',CURDATE(),'".$mode."','".$clientId."','".$flight."','".$hotel."')";
        $result2 = $connection->query($query2) or die("Error in query2".$connection->error);
        return $result2;
    }
    public function paidDate($connection,$reservationId){
        $query ="UPDATE `reservation` SET `datePaiement`=CURDATE() WHERE ID=".$reservationId."";
        $result = $connection->query($query) or die("Error in query".$connection->error);
         return $result;
    }
}
?>