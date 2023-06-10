<?php session_start();
require_once "../dashboard/config/config.php";
require_once '../functions/autoloader.php';
require_once '../dashboard/classes/Mail_class.php';

//INCLUDE REQUIRED PHP MAILER FILES
require "../php_mailer/PHPMailer.php";
require "../php_mailer/SMTP.php";
require "../php_mailer/Exception.php";

//DEFINE NAME SPACES
use PHPMailer\PHPMailer\SMTP;

$mail_obj = new Mail_class;


$email = htmlspecialchars($_POST['email']);

$min_no = 10000;
$max_no = 99999;
$reset_code = rand($min_no, $max_no);

$obj = new Users_class;

$response = $obj->update_reset_code($email, $reset_code);
if($response == "Successfully updated")
{
  // SEND EMAIL
  $admin_email = "admin@floxi.com";
  $from_name = "Floxi Luxury Store";
  $subject = "Password reset code";
  $body = "
   <p>use the code below to reset your password</p>
   <p>Password reset code: $reset_code</p>

   ";
  $mail_obj->send_mail($email,$admin_email, $from_name, $subject, $body);
  echo $response;
}else
{
  echo $response;
}