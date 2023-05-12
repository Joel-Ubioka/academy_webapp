<?php
include "../config/config.php";
include '../functions/autoloader.php';

$category_name = htmlspecialchars($_POST['product_category']);

$obj = new Sub_category_class;

$category_id = $obj->get_category_id($category_name);

$sub_categories = $obj->fetch_subcategory_by_cat_id($category_id);

if (!$sub_categories) {
    echo "";
} else {
    if (count($sub_categories) > 0) {
        $output = "<option value=''>Select Sub-category</option>";
        foreach ($sub_categories as $sub_category) {
            $sub_category = $sub_category->sub_category;
            $output .= "<option value='$sub_category'>$sub_category</option>";
        }
        echo $output;
    }
}
