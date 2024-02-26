<?php

//error_reporting(E_WARNING);
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo '<pre/>';



// $a = array('value1', 'value2', 2);
//$a = ['value1', 'value2', 2];

// you may convert simple types like int to array
$a = 1;
$a = array(1,2,3);

// BUT you cannot access array index on simple types
// $a = 0; // will not work
// $a['1'] = 'a'; // will not work


// if type is null already, it will be converted to array on the fly, no error in this case
$a = null; // works
$a['1'] = 'a'; // works


$key = 1;
//unset($a[$key]);
$a['1'] = 'a';

$numbers = [1,2,3,4,5,6,7];
$evens = array_filter($numbers, function ($value) {
    return ($value % 2 == 0);
});
//print_r($evens);


$repeats = [1,1,1,1,1,3,3,3,3,2,2,2,2];
// print_r(array_unique($repeats));
// print_r($repeats);
// sort($repeats);
// print_r($repeats);


//---------------------

$o[] = new stdclass();
$o[0]->a = 1;
$o[0]->b = 'string1';

$o[] = new stdclass();
$o[1]->a = 2;
$o[1]->b = 'string2';

print_r(array_column($o, 'b'));
