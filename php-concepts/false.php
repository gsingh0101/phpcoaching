<?php

echo '<pre/>';

// each of below is treast as fale value;
$falses = array();
$falses[] = 0;
$falses[] = null;
$falses[] = "";
$falses[] = false;
$falses[] = array();
$falses[] = " ";

// handy function to check false is empty() - even works on array, objects
echo 'check using empty() <br/>';
foreach($falses as $element) {
    var_dump($element);
    if (empty($element)) {
        echo "this is false <br/>";
    }
    else {
        echo " is true <br/>";
    }
}

echo 'check using ! condition <br/>';
foreach($falses as $element) {
    var_dump($element);
    if (!$element) {
        echo "this is false <br/>";
    }
    else {
        echo " is true <br/>";
    }
}

// empty() function does not give any warning when passed undeclared variable
if (empty($thisisundefined)) {
	echo "this is false <br/>";
}
else {
	echo " is true <br/>";
}

if (!($thisisundefined)) { // gives warning
	echo "this is false <br/>";
}
else {
	echo " is true <br/>";
}

