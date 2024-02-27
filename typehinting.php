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
$a = jointhings("a1", 1.1);
echowitheol($a);
$a = jointhings("1.1", 1.1);
echowitheol($a);

function jointhings_using_uniontypes(string|int $a, float $b): string {
    return $a . $b;
}
$a = jointhings_using_uniontypes("1abc", 1.1);
echowitheol($a);
$a = jointhings_using_uniontypes(1.1, 1.1);
echowitheol($a);
