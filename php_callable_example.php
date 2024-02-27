<?php

echo '<pre/>';
echo 'Example of user defined functions, passing function as parameters, callable user type <br/>';


$key = 0;
$o[$key] = new stdclass();
$o[$key]->a = 1;
$o[$key]->b = 2;

$key++;
$o[$key] = new stdclass();
$o[$key]->a = 5;
$o[$key]->b = 2;

$key++;
$o[$key] = new stdclass();
$o[$key]->a = 2;
$o[$key]->b = 'zstring1';

$key++;
$o[$key] = new stdclass();
$o[$key]->a = 10;
$o[$key]->b = 'string2';
$key++;

//sort($o);

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


//usort($o, 'sortbya');
// usort($o, [$obj, 'sortbya']);


class staticclass
{
    public static function sortbya($obj1, $obj2)
    {
        if ($obj1->a < $obj2->a) return -1;
        if ($obj1->a == $obj2->a) return 0;
        if ($obj1->a > $obj2->a) return 1;
    }
}
usort($o, 'staticclass::sortbya');


print_r($o);
