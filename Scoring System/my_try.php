<?php

function calculateScores($str)
{
    $a = 0;
    $b = 0;
    $c = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if (strtolower($str[$i]) === 'a') {
            $a++;
        }
        if (strtolower($str[$i]) === 'b') {
            $b++;
        }
        if (strtolower($str[$i]) === 'c') {
            $c++;
        }

    }

    return [$a, $b, $c];

}

echo implode(calculateScores('ABBACCCCAC'));
