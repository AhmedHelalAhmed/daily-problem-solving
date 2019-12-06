<?php

function buildStaircase($height, $block)
{

    $staircase = [];

    if ($height <= 0) {
        return $staircase;
    }

    for ($i = 0; $i < $height; $i++) {

        $staircaseRow = [];

        for ($j = 0; $j < $height; $j++) {

            if ($j <= $i) {

                $staircaseRow[] = $block;
            }

            if (!($j <= $i)) {

                $staircaseRow[] = "_";
            }

        }

        $staircase[] = $staircaseRow;

    }

    return $staircase;
}

echo implode('<br>', array_map(function ($item) {
    return implode($item);
}, buildStaircase(3, "*")));
