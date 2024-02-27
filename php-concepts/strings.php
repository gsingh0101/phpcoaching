<?php

echo '<pre/>';
echo 'Common string functions <br/>';

// creating string
$a = 10;
$b = 20;
$s = "$a,$b,c,d,e,f"; // double quote can contain other variables
print_r($s);
echo '<br/>';

$s = 'a,b,c,d,e,f'; // single quote cannot contain other variables
print_r($s);
echo '<br/>';


// very commonly used functions - explode and implode
// convert comma separated string to array
$s = "a,b,c,d,e,f"; // string
$arr = explode(",", $s);
print_r($arr);
echo '<br/>';

// convert array to comma separated string
$arr = array(1,2,3,4,5);
$s = implode(", ", $arr);
print_r($s);
echo typeof($s);
echo '<br/>';


