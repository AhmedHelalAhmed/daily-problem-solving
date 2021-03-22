<?php

function sortByLength($arr)
{
    $arrWithLength = [];
    foreach ($arr as $string) {
        $arrWithLength[strlen($string)] = $string;
    }
    $requiredSortedArray = [];
    $stringsCount = count($arr);
    for ($i = 0; $i < $stringsCount; $i++) {
        $minKeyValue = min(array_keys($arrWithLength));
        $requiredSortedArray[] = $arrWithLength[$minKeyValue];
        unset($arrWithLength[$minKeyValue]);
    }
    return $requiredSortedArray;
}


echo implode(' - ', sortByLength(["Google", "Apple", "Microsoft"]));
// ["Apple", "Google", "Microsoft"]

echo '<br>=========<br>';

echo implode(' - ', sortByLength(["Leonardo", "Michelangelo", "Raphael", "Donatello"]));
// ["Raphael", "Leonardo", "Donatello", "Michelangelo"]

echo '<br>=========<br>';

echo implode(' - ', sortByLength(["Turing", "Einstein", "Jung"]));
// ["Jung", "Turing", "Einstein"]
