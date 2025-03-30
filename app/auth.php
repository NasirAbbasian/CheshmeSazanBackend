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