<?php session_start();
require_once "../dashboard/config/config.php";
require_once '../functions/autoloader.php';

$full_name = htmlspecialchars($_POST['full_name']);
$email = htmlspecialchars($_POST['email']);
$phone_number = htmlspecialchars($_POST['phone_number']);
$password = htmlspecialchars($_POST['password']);
$address = htmlspecialchars($_POST['address']);
$country = htmlspecialchars($_POST['country']);

$obj = new Customers_class;

$obj->insert_customer($full_name, $email, $phone_number, $password, $address, $country);
