<?php

$root = __DIR__.'/..';

require_once $root.'/app/db.php';
require_once $root.'/app/response.php';

session_start();

function secure_input($input){
    return htmlspecialchars(trim($input));
}

