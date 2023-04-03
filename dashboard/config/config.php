<?php
class Db_conn
{
    protected function connect()
    {
        try {
            $username = "root";
            $password = "";
            $db_connection = new PDO('mysql:host=localhost; dbname=morrhtech_academy_db', $username, $password);
            return $db_connection;
        } catch (PDOException $e) {
            print "Error!" . $e->getMessage() . "<br>";
            die();
        }
    }

}
