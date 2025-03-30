<?php

require_once '../../app/initials.php';
require_once '../../app/auth.php';

$auth = new Auth();

if($auth->checkLogin()){
    response("کاربر وارد شده است",null,200);
}else{
    response("کاربر وارد نشده است",null,401);
}


