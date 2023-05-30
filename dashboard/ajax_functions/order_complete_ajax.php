<?php session_start();
require_once "../config/config.php";
require_once '../functions/autoloader.php';

$email = $_SESSION['customer_email'];
$ordered_products = $_POST['ordered_products'];
$payment_method = $_POST['payment_method'];

$obj = new Orders_class;

$obj->insert_order($email, $ordered_products, $payment_method);
