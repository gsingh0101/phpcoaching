<?php

echo '<pre/>';

// 1. is_array()
// check if variable is array before using index
// e.g.
$a = [1];
if (is_array($a)) {
  echo 'it is array <br/>';
}


// 2. array_unique()
$repeats = [1,1,1,1,1,3,3,3,3,2,2,2,2];
print_r(array_unique($repeats));
// print_r($repeats);


// 3. sorting
sort($repeats);
print_r($repeats);


// 4. array_column()
// extract columns from objects array
// add first object to array
$o[] = new stdclass();
$o[0]->id = 1;
$o[0]->address = 'Lucknow';
// add second object to array
$o[] = new stdclass();
$o[1]->id = 2;
$o[1]->address = 'New Delhi';
// extract a particular column 'id'
echo 'only ids <br/>';
print_r(array_column($o, 'id'));
echo 'only addresses <br/>';
print_r(array_column($o, 'address'));


// 5. array_merge() - kind of joining 2 arrays into 1
$a = array('green', 'red', 'yellow');
$b = array('purple', 'grey', 'pink');
$c = array_merge($a, $b);
print_r($c);
echo '<br/>';


// 6. array_combine() - use keys from one and values from others
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
echo '<br/>';
