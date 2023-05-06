<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path = "../dashboard/classes/";
    $ext = ".php";
    $full_path = $path . $className . $ext;

    if (!file_exists($full_path)) {
        return false;
    }

    include_once $full_path;
}
