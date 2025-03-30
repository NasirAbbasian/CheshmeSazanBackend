<?php

$root = __DIR__.'/..';

require_once $root.'/app/db.php';
require_once $root.'/app/response.php';

session_start();

function secure_input($input, $label){
    if(empty($input) || !isset($input) || $input == null){
        response("لطفا $label را وارد کنید",null,400);
        exit();
    }
    return htmlspecialchars(mysqli_real_escape_string(trim($input)));
}

