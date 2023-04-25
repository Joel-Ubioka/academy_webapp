<?php
include "../config/config.php";
include '../functions/autoloader.php';

$id = $_POST['delete_id'];
$table = $_POST['table'];

$obj = new Delete_class;
$obj->delete_item($table, $id);
