<?php

$o = new stdclass();
$o->a = 1;
$o->b = 2;

echo '<pre/>';
//print_r($o);


$a = [1, 2];
$acasttoObject = (object)$a;
print_r($acasttoObject);

echo gettype($acasttoObject);

// below command disabled on online testing sites
// echo get_class($acasttoObject);

