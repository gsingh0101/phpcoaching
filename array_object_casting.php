<?php

// create array from object by casting
$obj = new stdclass();
$obj->field1 = 'value1';
$obj->field2 = 'value2';
$obj->field3 = 'value3';

$arr = (array)$obj;
print_r($arr);

