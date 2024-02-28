<?php

echo '<pre/>';
echo 'Example of type hinting <br/>';


function echowitheol($arg)
{
    echo $arg . PHP_EOL;
}

function jointhings(int $a, float $b): string {
    return $a . $b;
}
// $a = jointhings("a1", 1.1); // does not work as first parameter is specified as int but string passed
$a = jointhings("1", 1.1); // works because PHP internally interprets strings which are convertible to numerals as numerals
echowitheol($a);

// $a = jointhings("1.1", 1.1); // does not work because 1.1 CANNOT be interpretted integer but ONLY as a float
// echowitheol($a);


function jointhings_using_uniontypes(string|int $a, float $b): string {
    return $a . $b;
}
$a = jointhings_using_uniontypes("1abc", 1.1);
// $a = jointhings_using_uniontypes(1.1, 1.1); // will not work as first parameter is float
echowitheol($a);


// understand the === vs == operator
if ("1" === 1) {
    echo 'these are identical <br/>';
} else {
    echo 'these are NOT identical <br/>';
}


// understand the == operator
if ("1" == 1) {
    echo 'these are equal <br/>';
} else {
    echo 'these are NOT equal <br/>';
}

