<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s)
{

    $isPM = strpos(strtolower($s), "pm");
    $hours = "";
    $s = substr($s, 0, -2);

    if ($isPM  === false) {
        $hours = substr($s, 0, 2);
        if ($hours == "12") {
            $hours = "00";
        }
    } else {
        $hours = (string)(intval($s[0] . $s[1]) + 12);
        if ($hours == "24") {
            $hours = "12";
        }
    }


    $s[0] = $hours[0];
    $s[1] = $hours[1];

    return $s;
}

echo timeConversion('12:45:54PM');
