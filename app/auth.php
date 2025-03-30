<?php

class Auth {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $user = $this->db->oneRecord($query);
        if($user){
            $_SESSION['user'] = $user;
            return $user;
        }else{
            return false;
        }
    }
    public function register($username, $password, $phoneNumber, $first_name, $last_name, $father_name, $salaryPerHour){
        $query = "INSERT INTO users (username, password, phoneNumber, first_name, last_name, father_name, salaryPerHour, role_id) VALUES ('$username', '$password', '$phoneNumber', '$first_name', '$last_name', '$father_name', '$salaryPerHour', 1)";
        $this->db->query($query);
        return true;
    }
    public function checkLogin(){
        if(isset($_SESSION['user'])){
            return true;
        }else{
            return false;
        }
    }
    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
    }
}