<?php

function arrayOfMultiples($num, $length)
{
    $arrayOfMultiples = [];

    for ($i = 1; $i <= $length; $i++) {

        $arrayOfMultiples[] = $num * $i;

    }

    return $arrayOfMultiples;
}

echo implode(',', arrayOfMultiples(7, 5));

/*

// another great solution form solutions
function arrayOfMultiples($num, $length) {
return array_map(function($x) use ($num) {
return $x * $num;
}, range(1, $length));
}

// another great solution form solutions
function arrayOfMultiples($num, $length) {
return range($num,$num*$length,$num);
}

 */
