<?php



// Complete the staircase function below.
function staircase($n)
{

    for ($j = 0; $j < $n; $j++) {
        for ($i = 0; $i < $n - $j - 1; $i++) {
            echo ' ';
        }
        for ($i = 0; $i < $j + 1; $i++) {
            echo '#';
        }
        echo "\xA";
    }
}



staircase(4);
