<?php

function magnitude($vector = [])
{
    if (!count($vector)) {
        return 0;
    }

    $squares = array_map(function ($item) {
        return $item * $item;
    }, $vector);

    $sumOfSquares = array_reduce($squares, function ($carry, $item) {
        $carry += $item;
        return $carry;
    });

    return sqrt($sumOfSquares);

}
echo magnitude([2, 3, 6, 1, 8]);
echo "<br>";
echo magnitude([0, 0, -10]);
echo "<br>";
echo magnitude([]);
echo "<br>";
echo magnitude([3, 4]);
echo "<br>";
