<?php

include "../config/config.php";
include '../functions/autoloader.php';

$sub_category_id = $_POST['sub_category_id'];
$category_name = htmlspecialchars($_POST['product_category']);
$sub_category = htmlspecialchars($_POST['sub_category']);

$obj = new Sub_category_class();

$obj->update_sub_category($sub_category_id, $category_name, $sub_category);
