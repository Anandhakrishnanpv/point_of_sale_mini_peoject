<?php
class Database
{
    private function db_connect()
    {
        $DBHOST = "localhost";
        $DBNAME = "pos_db";
        $DBUSER = "root";
        $DBPASS = "";
        $DBDRIVER = "mysql";

        //PHP Data Object(PDO), used to easily switch between database types and easy transition from different databases
        try {
            $con = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASS);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return null; // Return null on connection failure
        }
        return $con;
    }

    public function query($query, $data = array())
    {
        $con = $this->db_connect();
        if (!$con) {
            return false; // Return false if connection fails
        }
        $smt = $con->prepare($query);
        $check = $smt->execute($data);

        if ($check) {
            $result = $smt->fetchAll(PDO::FETCH_ASSOC);
            if (is_array($result) && count($result) > 0) {
                return $result;
            }
        }
        return false;
    }
}
?>
