<?php

/**
 * s: integer, starting point of Sam's house location.
 * t: integer, ending location of Sam's house location.
 * a: integer, location of the Apple tree.
 * b: integer, location of the Orange tree.
 * apples: integer array, distances at which each apple falls from the tree.
 * oranges: integer array, distances at which each orange falls from the tree.
 */
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{
    $applesCount = 0;
    $orangesCount = 0;
    foreach ($apples as $apple) {
        $distance = $apple + $a;
        if ($distance >= $s && $distance <= $t) {
            $applesCount++;
        }
    }
    foreach ($oranges as $orange) {
        $distance = $orange + $b;
        if ($distance >= $s && $distance <= $t) {
            $orangesCount++;
        }
    }
    echo $applesCount . "\n" . $orangesCount;
}
countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6]);
