<?php

echo '<pre/>';

// array_unique
$repeats = [1,1,1,1,1,3,3,3,3,2,2,2,2];
print_r(array_unique($repeats));
// print_r($repeats);

// sorting
sort($repeats);
print_r($repeats);


// extract columns from objects array

$o[] = new stdclass();
$o[0]->a = 1;
$o[0]->b = 'string1';

$o[] = new stdclass();
$o[1]->a = 2;
$o[1]->b = 'string2';

print_r(array_column($o, 'b'));

