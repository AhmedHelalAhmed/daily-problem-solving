<?php

function serviceLane($cases, $width)
{
    $res = [];
    foreach ($cases as $case) {
        $start = $case[0];
        $end = $case[1];
        $values = [];
        for ($j = $start; $j <= $end; $j++) {
            $values[] = $width[$j];
        }
        $res[] = min($values);
    }

    return $res;
}
$cases = [[0, 3], [4, 6], [6, 7], [3, 5], [0, 7]];
$width = [2, 3, 1, 2, 3, 2, 3, 3];
$result = serviceLane($cases, $width);

/*
1
2
3
2
1
*/

echo implode("\n", $result);
