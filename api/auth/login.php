<?php 

require_once '../../app/initials.php';
require_once '../../app/auth.php';

$auth = new Auth();

$username = secure_input($_GET['username']);
$password = secure_input($_GET['password']);

$user = $auth->login($username, $password);

if($user){
    response("ورود با موفقیت انجام شد",$user);
}else{
    response("ورود با مشکل مواجه شد",null,401);
}



