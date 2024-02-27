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

function sortbyname($obj1, $obj2)
{
    if ($obj1->name < $obj2->name) return -1;
    if ($obj1->name == $obj2->name) return 0;
    if ($obj1->name > $obj2->name) return 1;
}

function sortbymarks($obj1, $obj2)
{
    if ($obj1->marks < $obj2->marks) return -1;
    if ($obj1->marks == $obj2->marks) return 0;
    if ($obj1->marks > $obj2->marks) return 1;
}

class nonstaticclass
{
    public function sortbymarks($obj1, $obj2)
    {
        if ($obj1->marks < $obj2->marks) return -1;
        if ($obj1->marks == $obj2->marks) return 0;
        if ($obj1->marks > $obj2->marks) return 1;
    }
    public function sortbyname($obj1, $obj2)
    {
        if ($obj1->name < $obj2->name) return -1;
        if ($obj1->name == $obj2->name) return 0;
        if ($obj1->name > $obj2->name) return 1;
    }
}
$objoffunctions = new nonstaticclass();

class staticclass
{
    public static function sortbymarks($obj1, $obj2)
    {
        if ($obj1->marks < $obj2->marks) return -1;
        if ($obj1->marks == $obj2->marks) return 0;
        if ($obj1->marks > $obj2->marks) return 1;
    }
    public static function sortbyname($obj1, $obj2)
    {
        if ($obj1->name < $obj2->name) return -1;
        if ($obj1->name == $obj2->name) return 0;
        if ($obj1->name > $obj2->name) return 1;
    }
}

// three ways of calling the comparison function
usort($o, 'staticclass::sortbyname');
//usort($o, 'sortbyname');
//usort($o, [$objoffunctions, 'sortbyname']);

print_r($o);
