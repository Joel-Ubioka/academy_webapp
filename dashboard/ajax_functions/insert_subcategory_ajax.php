<?php
include "../config/config.php";
include '../functions/autoloader.php';

$category_name = htmlspecialchars($_POST['product_category']);
$sub_category = htmlspecialchars($_POST['sub_category']);

$obj = new Sub_category_class;

$obj->insert_sub_category($category_name, $sub_category);
