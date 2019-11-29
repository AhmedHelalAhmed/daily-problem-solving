<?php
/*
6  = 00000110
23 = 00010111
and  00000110
or   00010111
xor  00010001
 */
function decimalTOBinary8Bits($number)
{
    $remainders = [];

    do {
        $remainders[] = $number % 2;
        $resultOfDivision = intval($number / 2);

        $number = $resultOfDivision;

    } while ($resultOfDivision);

    $binary = array_reverse($remainders);
    $zeroes = [];

    for ($i = sizeof($binary); $i < 8; $i++) {
        $zeroes[] = 0;
    }
    // to convert array to string
    return implode(array_merge($zeroes, $binary));
}

function binary8BitsTOdecimal($binary)
{

    $decimal = 0;
    for ($i = 0; $i < 8; $i++) {
        $decimal += pow(2, $i) * $binary[8 - $i - 1];
    }

    return $decimal;
}

function bitwiseAND($n1, $n2)
{

    $binaryN1 = decimalTOBinary8Bits($n1);
    $binaryN2 = decimalTOBinary8Bits($n2);
    $res = [];

    for ($i = 0; $i < 8; $i++) {
        if ($binaryN1[$i] && $binaryN2[$i]) {
            $res[] = 1;
        } else {
            $res[] = 0;
        }

    }

    return binary8BitsTOdecimal($res);

}

function bitwiseOR($n1, $n2)
{
    $binaryN1 = decimalTOBinary8Bits($n1);
    $binaryN2 = decimalTOBinary8Bits($n2);
    $res = [];

    for ($i = 0; $i < 8; $i++) {
        if ($binaryN1[$i] || $binaryN2[$i]) {
            $res[] = 1;
        } else {
            $res[] = 0;
        }

    }
    return binary8BitsTOdecimal($res);
}

function bitwiseXOR($n1, $n2)
{
    $binaryN1 = decimalTOBinary8Bits($n1);
    $binaryN2 = decimalTOBinary8Bits($n2);

    $res = [];

    for ($i = 0; $i < 8; $i++) {
        if ($binaryN1[$i] === $binaryN2[$i]) {
            $res[] = 0;
        } else {
            $res[] = 1;
        }

    }
    return binary8BitsTOdecimal($res);
}
/*

bitwiseAND(7, 12) ➞ 4

bitwiseOR(7, 12) ➞ 15

bitwiseXOR(7, 12) ➞ 11

 */
echo bitwiseAND(7, 12) . '<br/>';
echo bitwiseOR(7, 12) . '<br/>';
echo bitwiseXOR(7, 12) . '<br/>';
