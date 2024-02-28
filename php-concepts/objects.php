<?php

// mainly about the default stdclass objects
// more object examples also covered in classes.php file

echo '<pre/>';


$o = new stdclass();
$o->a = 1;
$o->b = 2;

print_r($o);
echo '<br/>';

$a = [1, 2];
$acasttoObject = (object)$a;
print_r($acasttoObject);

echo gettype($acasttoObject);

// below command disabled on online testing sites
// echo get_class($acasttoObject);

unset($o->a); // removes one of the members of the class, not possible in c language

print_r($o);
echo '<br/>';

