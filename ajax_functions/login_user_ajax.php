<?php
session_start();
require_once "../dashboard/config/config.php";
require_once '../functions/autoloader.php';

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$obj = new Users_class;

$obj->login_user($email, $password);
