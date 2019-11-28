<?php

function validatePIN($pin)
{
    $length = strlen($pin);

    if ($length != 4 && $length != 6) {
        return false;

    }

    for ($i = 0; $i < $length; $i++) {
        switch ($pin[$i]) {
            case '0':
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
            case '7':
            case '8':
            case '9':
                break;
            default:
                return false;

        }
    }

    return true;

}
var_dump(validatePIN('1234'));
