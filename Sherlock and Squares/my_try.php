<?php

/**
 * floor(sqrt(b)) - ceil(sqrt(a)) + 1
 * We take floor of sqrt(b) because we need to consider numbers before b.

 * We take ceil of sqrt(a) because we need to consider numbers after a.
 */

function squares($a, $b)
{
    return floor(sqrt($b)) - ceil(sqrt($a)) + 1;
}

// not Efficient
function squaresTry1($a, $b)
{
    $numbers = range($a, $b);
    return count(array_filter($numbers, function ($square) {
        $number = intval(sqrt($square));
        return $number * $number === $square;
    }));
}

// 2 case 1
$a = 3;
$b = 9;


/*
// 0 case 2
$a = 17;
$b = 24;
*/

echo 'squares => ' . squares($a, $b) . ' | ';


echo 'squaresTry1 => ' . squaresTry1($a, $b);
