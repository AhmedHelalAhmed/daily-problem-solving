<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{
    // Write your code here
    $arrSize = count($arr[0]);
    $primaryDiagonalSum = 0;
    $secondaryDiagonalSum = 0;

    for ($i = 0; $i < $arrSize; $i++) {
        $primaryDiagonalSum += $arr[$i][$i];
        $secondaryDiagonalSum += $arr[$i][($arrSize - ($i + 1))];
    }

    return abs($primaryDiagonalSum - $secondaryDiagonalSum);
}

/*
* hackerRank provided code

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);

*/

echo diagonalDifference([[11, 2, 4], [4, 5, 6], [10, 8, -12]]);
