<?php session_start();
require_once "../config/config.php";
require_once '../functions/autoloader.php';

//INCLUDE REQUIRED PHP MAILER FILES
require "../php_mailer/PHPMailer.php";
require "../php_mailer/SMTP.php";
require "../php_mailer/Exception.php";





//DEFINE NAME SPACES
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail_obj = new Mail_class;




$email = $_SESSION['customer_email'];
$ordered_products = $_POST['ordered_products'];
$payment_method = $_POST['payment_method'];

$obj = new Orders_class;

$response = $obj->insert_order($email, $ordered_products, $payment_method);

if ($response == "Successfully ordered!") {
     $admin_email = "admin@floxi.com";
    //  $from_name = "Floxi Luxury Store";
        $customer_details = $obj->fetch_customer($email);
        $from_name = $customer_details->full_name;
        $phone_number = $customer_details->phone_number;
        $address = $customer_details->address;
     $subject = "New order from Floxi Luxury Store";
     $body = "
     <p>$from_name from $address made an order from your online shop</p>
     <p>You can reach him/her via $phone_number or login to your dashboard to see the order</p>
     
     ";

  
    //SEND EMAIL
    $mail_obj->send_mail($admin_email, $email, $from_name, $subject, $body);

    $body = "
    <p>You have successfully ordered for products from Floxi Luxury Store. The admin will contact you for delivery.</p>
    
    ";
    $subject = "New confirmation from Floxi Luxury Store";

    $mail_obj->send_mail( $email, $admin_email, $from_name, $subject, $body);

    echo $response;
} else {
    echo $response;
}