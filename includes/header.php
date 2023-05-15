<?php session_start();
require_once "dashboard/config/config.php";
require_once 'functions/dashboard_autoloader.php';
require_once "dashboard/classes/file_class.php";
require_once "dashboard/classes/product_category_class.php";
require_once "dashboard/classes/sub_category_class.php";
require_once "dashboard/classes/product_class.php";

include "url/base_url.php";

$obj = new Product_class;
$category_obj = new Product_category_class;
$sub_category_obj = new Sub_category_class;

$products = $obj->view_products();
$categories = $category_obj->fetch_categories();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FLOXI LIGHTING INNOVATION</title>
  <link rel="icon" type="image/x-icon" href="<?php echo $base_url; ?>images/logo.png" />
  <!-- CSS FILES -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/colors.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>sliders/slider.css?ver=<?php echo microtime(); ?>">
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css?ver=<?php echo microtime(); ?>">
  <link rel="stylesheet" href="<?php echo $base_url; ?>popups/popup.css?ver=<?php echo microtime(); ?>">
  <link rel="stylesheet" href="<?php echo $base_url; ?>popups/toast.css?ver=<?php echo microtime(); ?>">
  <link rel="stylesheet" href="<?php echo $base_url; ?>css/form.css?ver=<?php echo microtime(); ?>">
  <link rel="stylesheet" href="<?php echo $base_url; ?>popups/overlay.css?ver=<?php echo microtime(); ?>">
  <link rel="stylesheet" href="<?php echo $base_url; ?>loading/loading.css?ver=<?php echo microtime(); ?>">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
  </script>
  <script src="https://kit.fontawesome.com/d79d358dc6.js" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>

</head>