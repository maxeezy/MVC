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
    public function  proverka($que)
    {
        $sql = self::createSql();
        if ($result = $sql->query($que)) {
            $row = $result->num_rows;
        }
        return $row;
    }
}