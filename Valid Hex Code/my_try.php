<?php

function isValidHexCode($str)
{
    if (strlen($str) !== 7) {
        return false;
    }
    if ($str[0] !== '#') {
        return false;
    }
    $str = strtolower($str);
    $allowedAlphaNumber = [
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f',
    ];
    for ($i = 1; $i < 7; $i++) {
        if (in_array($str[$i], $allowedAlphaNumber, true)) {

            continue;
        } else {
            return false;
        }
    }

    return true;
}

var_dump(isValidHexCode('#CD5C5C'));
