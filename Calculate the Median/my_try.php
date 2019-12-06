<?php

function median($arr)
{

    sort($arr);

    if (count($arr) % 2 == 0) {

        $middlePart1 = intval(count($arr) / 2);

        $middlePart2 = intval(count($arr) / 2) - 1;

        return (($arr[$middlePart1] + $arr[$middlePart2]) / 2);
    }

    return $arr[intval(count($arr) / 2)];

}

// echo median([2, 5, 6, 2, 6, 3, 4]);

echo median([21.4323, 432.54, 432.3, 542.4567]);
