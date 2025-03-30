<?php

require_once '../app/initials.php';

$db = new DB();

$query = "SELECT * FROM users";
$users = $db->allRecords($query);

response("کاربران با موفقیت دریافت شدند",$users);



