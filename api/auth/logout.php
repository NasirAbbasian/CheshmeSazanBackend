<?php

require_once '../../app/initials.php';
require_once '../../app/auth.php';

$auth = new Auth();
$auth->logout();
response("خروج با موفقیت انجام شد",null,200);
