<?php

function workbook($n, $k, $arr)
{
    $pageNumber = 1;
    $counter = 0;
    for ($chapter = 1; $chapter <= $n; $chapter++) {
        $problemsCount = $arr[$chapter - 1];

        for ($problemNumber = 1; $problemNumber <= $problemsCount; $problemNumber++) {

            if ($problemNumber == $pageNumber) {
                $counter++;
            }
            if ($problemNumber % $k == 0 && $problemNumber != $problemsCount) {
                $pageNumber++;
            }
        }
        $pageNumber++;
    }

    return $counter;
}
$n = 5;
$k = 3;
$arr = [4, 2, 6, 1, 10];

echo workbook($n, $k, $arr);
