<?php session_start();
require_once "../dashboard/config/config.php";
require_once '../functions/autoloader.php';


$email = $_SESSION['resest_email'];


$reset_code = htmlspecialchars($_POST['reset_code']);
$new_password = htmlspecialchars($_POST['new_password']);
$confirm_password = htmlspecialchars($_POST['confirm_password']);


$obj = new Users_class;

$obj->reset_password($email, $reset_code, $new_password, $confirm_password);