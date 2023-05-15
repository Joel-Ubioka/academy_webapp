<?php

include "../config/config.php";
include '../functions/autoloader.php';

$product_spec = $_POST['product_spec'];
$product_desc = $_POST['product_desc'];

// REMOVE SPAN TAGS
// $product_spec = preg_match('/<span[^>]+\>/i', '', $product_spec);
// $product_desc = preg_match('/<span[^>]+\>/i', '', $product_desc);

$product_name = htmlspecialchars($_POST['product_name']);
$product_category = htmlspecialchars($_POST['product_category']);
$sub_category = htmlspecialchars($_POST['sub_category']);
$product_price = htmlspecialchars($_POST['product_price']);
$product_tag = htmlspecialchars($_POST['product_tag']);
$product_publisher = htmlspecialchars($_POST['product_publisher']);
$product_spec = htmlspecialchars($product_spec);
$product_desc = htmlspecialchars($product_desc);

//CHANGE THE CHARACTER ENCODING
$product_name = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $product_name);
// $product_category = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $product_category);
$product_price = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $product_price);
$product_tag = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $product_tag);
$product_publisher = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $product_publisher);
$product_spec = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $product_spec);
$product_desc = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $product_desc);

$product_image = $_FILES['product_img'];

$obj = new Product_class;

$obj->insert_product($product_name, $product_category, $sub_category, $product_price, $product_tag, $product_publisher, $product_spec, $product_desc, $product_image);