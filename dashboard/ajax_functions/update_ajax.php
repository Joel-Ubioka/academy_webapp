<?php
include "../config/config.php";
include '../functions/autoloader.php';

$id = $_POST['id'];
$table = $_POST['table'];
$column = $_POST['column'];
$value = $_POST['value'];

$obj = new Update_class;
$obj->update_item($table, $id, $column, $value);
