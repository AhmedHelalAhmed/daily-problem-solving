<?php

function nearlySimilarRectangles($sides)
{
    $count = 0;
    $size = count($sides);
    for ($i = 0; $i <= $size - 2; $i++) {
        for ($j = $i + 1; $j <= $size - 1; $j++) {
            if ($sides[$i][0] * $sides[$j][1] == $sides[$i][1] * $sides[$j][0]) {
                $count++;
            }
        }
    }
    return $count;
}
