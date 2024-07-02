<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/function.php';
$str = file_get_contents("{$location}/About.txt");
$return = isAscii($str);
var_dump($return);