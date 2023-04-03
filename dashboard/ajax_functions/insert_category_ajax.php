<?php
include "../config/config.php";
include '../functions/autoloader.php';

$category_name = htmlspecialchars($_POST['category_name']);
$category_image = $_FILES['category_img'];

$obj = new Product_category_class();

$obj->insert_category($category_name, $category_image);