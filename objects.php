<?php

//error_reporting(E_WARNING);
error_reporting(E_ALL);
ini_set('display_errors', 1);


$o = new stdclass();
$o->a = 1;
$o->b = 2;

echo '<pre/>';
//print_r($o);


$a = [1, 2];
$acasttoObject = (object)$a;
print_r($acasttoObject);

//echo gettype($acasttoObject);
echo get_class($acasttoObject);

