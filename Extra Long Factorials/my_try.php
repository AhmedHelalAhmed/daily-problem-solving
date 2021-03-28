<?php

// https://www.php.net/manual/en/function.bcmul.php

function extraLongFactorials($n)
{
    if ($n == 1) {
        return 1;
    }
    return bcmul($n, extraLongFactorials($n - 1));
}
$n = 25;

echo extraLongFactorials($n);
