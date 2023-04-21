<?php
<?php
include "../config/config.php";
include '../functions/autoloader.php';

$category_id = $_POST['category_id'];
$category_name = htmlspecialchars($_POST['category_name']);
$category_image = $_FILES['category_img'];

$obj = new Product_category_class();

$obj->update_category($category_id, $category_name, $category_image);