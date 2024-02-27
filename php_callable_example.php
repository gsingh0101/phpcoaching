<?php

echo '<pre/>';
echo 'Example of user defined functions, passing function as parameters, callable user type <br/>';


$key = 0;
$o[$key] = new stdclass();
$o[$key]->marks = 1;
$o[$key]->name = 'Foo';

$key++;
$o[$key] = new stdclass();
$o[$key]->marks = 5;
$o[$key]->name = 'Bar';

$key++;
$o[$key] = new stdclass();
$o[$key]->marks = 2;
$o[$key]->name = 'John';

$key++;
$o[$key] = new stdclass();
$o[$key]->marks = 10;
$o[$key]->name = 'Doe';
$key++;

// default sort below simply sorts on first key, cannot be controlled
// sort($o);

// to sort on specific field, use usort and pass function to use for comparing

function sortbyb($obj1, $obj2)
{
    if ($obj1->b < $obj2->b) return -1;
    if ($obj1->b == $obj2->b) return 0;
    if ($obj1->b > $obj2->b) return 1;
}

function sortbya($obj1, $obj2)
{
    if ($obj1->a < $obj2->a) return -1;
    if ($obj1->a == $obj2->a) return 0;
    if ($obj1->a > $obj2->a) return 1;
}

class nonstaticclass
{
    public function sortbya($obj1, $obj2)
    {
        if ($obj1->a < $obj2->a) return -1;
        if ($obj1->a == $obj2->a) return 0;
        if ($obj1->a > $obj2->a) return 1;
    }
    public function sortbyb($obj1, $obj2)
    {
	if ($obj1->b < $obj2->b) return -1;
	if ($obj1->b == $obj2->b) return 0;
	if ($obj1->b > $obj2->b) return 1;
    }
}
$objoffunctions = new nonstaticclass();

class staticclass
{
    public static function sortbya($obj1, $obj2)
    {
        if ($obj1->a < $obj2->a) return -1;
        if ($obj1->a == $obj2->a) return 0;
        if ($obj1->a > $obj2->a) return 1;
    }
    public static function sortbyb($obj1, $obj2)
    {
	if ($obj1->b < $obj2->b) return -1;
	if ($obj1->b == $obj2->b) return 0;
	if ($obj1->b > $obj2->b) return 1;
    }
}

// three ways of calling the comparison function
usort($o, 'staticclass::sortbyb');
//usort($o, 'sortbyb');
//usort($o, [$objoffunctions, 'sortbyb']);

print_r($o);
