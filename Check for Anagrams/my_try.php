<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function isAnagram($input1, $input2)
{

    if(strlen($input1)!==strlen($input2))
    {
        return false;
    }

    $input1=strtolower($input1);
    $input2=strtolower($input2);
    $word='';

    for($i=0;$i<strlen($input1);$i++)
    {

        $currentCharacter=$input1[$i];

        $pos=strpos($input2,$currentCharacter);

        if($pos!==false)
        {
            $word.=$input2[$pos];
            $input2[$pos]=0;
        }
        else
        {
            return false;
        }
    }

    return true;

}


var_dump(isAnagram('Nope','oNte'));