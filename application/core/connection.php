<?php
class Connection
{
    public function createSql()
    {
        $conn = new mysqli('localhost', "root", "", "user");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}