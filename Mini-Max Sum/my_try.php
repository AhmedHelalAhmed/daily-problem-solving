<?php

function miniMaxSum($arr)
{
    $minValue = $arr[0];
    $maxValue = $arr[0];
    $sum = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $sum += $arr[$i];
        if ($minValue > $arr[$i]) {
            $minValue = $arr[$i];
        }
        if ($maxValue < $arr[$i]) {
            $maxValue = $arr[$i];
        }
    }

    echo ($sum - $maxValue) . ' ' . ($sum - $minValue);
}


$arr = [7, 69, 2, 221, 8974];

miniMaxSum($arr);// 299 9271
