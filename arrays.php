<?php

//error_reporting(E_WARNING);
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<pre/>';



// $a = array('value1', 'value2', 2);
//$a = ['value1', 'value2', 2];

$a = null;
// $a = 0; // will not work

$key = 1;
//unset($a[$key]);
$a['1'] = 'a';

print_r($a);

