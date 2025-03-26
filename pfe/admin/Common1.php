<?php
class Common
{
    public function getAllMessages($connection) {
        $query = "SELECT * FROM contactus";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
}