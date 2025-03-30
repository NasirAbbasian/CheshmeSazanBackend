<?php

require_once '../../app/initials.php';
require_once '../../app/auth.php';

$auth = new Auth();

$username = secure_input($_GET['username'], "نام کاربری");
$password = secure_input($_GET['password'], "رمز عبور");
$phoneNumber = secure_input($_GET['phoneNumber'], "شماره تلفن");
$first_name = secure_input($_GET['first_name'], "نام");
$last_name = secure_input($_GET['last_name'], "نام خانوادگی");
$father_name = secure_input($_GET['father_name'], "نام پدر");
$salaryPerHour = secure_input($_GET['salaryPerHour'], "دستمزد هر ساعت");

$auth->register($username, $password, $phoneNumber, $first_name, $last_name, $father_name, $salaryPerHour);

response("ثبت نام با موفقیت انجام شد",null,200);


