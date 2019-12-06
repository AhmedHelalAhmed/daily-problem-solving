<?php

function insertWhitespace($s)
{

    return preg_replace('~([a-z])([A-Z])~', '\\1 \\2', $s);

}

echo insertWhitespace("SheWalksToTheBeach");
