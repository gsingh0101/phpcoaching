<?php

// create array from object by casting
$obj = new stdclass();
$obj->field1 = 'value1';
$obj->field2 = 'value2';
$obj->field3 = 'value3';

$arr = (array)$obj;
print_r($arr);

// create object from array
$a = array('name' => 'Ravi', 'email' => 'ravi@example.com', 'id' => 'CSE01');
$object_from_array = (object)$a;
print_r($object_from_array);

