<?php
class DB {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli('localhost', 'root', '', 'cheshmesazan');
    }

    public function oneRecord($query){
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    public function allRecords($query){
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function __destruct() {
        $this->conn->close();
    }
}
