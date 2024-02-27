<?php

echo '<pre/>';

// creating array
$a = array('value1', 'value2', 2);
$a = ['value1', 'value2', 2];

// creating associative array
$a = array('name' => 'Ravi', 'email' => 'ravi@example.com', 'id' => 'CSE01');
print_r($a);


$a = array(0,1,2,3,4,5,6,7);
// remove 2nd element, with value 1
unset($a[1]);
print_r($a);

