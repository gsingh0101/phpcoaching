<?php

//error_reporting(E_WARNING);
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<pre/>';


$f = [0, null, " ", false, ""];
foreach($f as $element) {
    if (empty($element)) echo "this is false" . PHP_EOL;
    else echo print_r($element, true) . " is true" . PHP_EOL;
}
