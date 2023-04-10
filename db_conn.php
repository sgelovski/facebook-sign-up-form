<?php
class DBConnection
{
    public static function getDbConnection()
    {
        if (isset($_POST['submit'])) {
            $host = "127.0.0.1:3306";
            $username = "root";
            $password = "123456789";
            $database = "sys";

            $conn = new mysqli($host, $username, $password, $database);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            return $conn;
        }
    }
}

