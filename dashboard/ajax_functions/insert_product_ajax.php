<?php

include "../config/config.php";
include '../functions/autoloader.php';

$product_name = htmlspecialchars($_POST['product_name']);
$product_category = htmlspecialchars($_POST['product_category']);
$product_price = htmlspecialchars($_POST['product_price']);
$product_tag = htmlspecialchars($_POST['product_tag']);
$product_publisher = htmlspecialchars($_POST['product_publisher']);
$product_spec = htmlspecialchars($_POST['product_spec']);
$product_desc = htmlspecialchars($_POST['product_desc']);
$product_image = $_FILES['product_img'];

$obj = new Product_class;

$obj->insert_product($product_name, $product_category, $product_price, $product_tag, $product_publisher, $product_spec, $product_desc, $product_image);
