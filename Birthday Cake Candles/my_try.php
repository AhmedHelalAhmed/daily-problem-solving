<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles)
{
    $maxHeightCandle = max($candles);
    $countForMaxHeightCandle = 0;
    foreach ($candles as $candle) {
        if ($candle == $maxHeightCandle) {
            $countForMaxHeightCandle++;
        }
    }
    return $countForMaxHeightCandle;
}

$candles = [3, 1, 2, 3];
$result = birthdayCakeCandles($candles);

echo $result;
