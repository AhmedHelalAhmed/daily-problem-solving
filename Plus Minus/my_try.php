<?php

function plusMinus($arr)
{
    $positiveNumberCount = 0;
    $negativeNumberCount = 0;
    $zeroNumberCount = 0;
    foreach ($arr as $item) {
        if ($item < 0) {
            $negativeNumberCount++;
        } else if ($item > 0) {
            $positiveNumberCount++;
        } else {
            $zeroNumberCount++;
        }
    }

    $totalCount = $positiveNumberCount + $negativeNumberCount + $zeroNumberCount;
    echo number_format($positiveNumberCount / $totalCount, 6) . "\xA";
    echo number_format($negativeNumberCount / $totalCount, 6) . "\xA";
    echo number_format($zeroNumberCount / $totalCount, 6) . "\xA";
}


echo plusMinus([1, 1, -1, -1, 0]);
