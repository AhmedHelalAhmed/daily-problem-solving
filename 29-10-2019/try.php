<?php

// https://www.geeksforgeeks.org/print-a-pattern-without-using-any-loop

$n=16;

echo getPattern (16,'',16,'-');

function getPattern ($n,$pattern,$inputValue,$sign)
{
	if(!$pattern)
	{
		$pattern.=$n.' , ';
		$n-=5;
		return getPattern($n,$pattern,$inputValue,'-');
		
	}
	else if($n==$inputValue)
	{
		$pattern.=$n;
		return $pattern;
	}
	else if($n<0||$n==0)
	{
		$pattern.=$n.' , ';
		$n+=5;
		return getPattern($n,$pattern,$inputValue,'+');
	}
	else
	{
		$pattern.=$n.' , ';

		if($sign==='+')
		{
			$n+=5;
			return getPattern($n,$pattern,$inputValue,'+');
		}
		else
		{
			$n-=5;
			return getPattern($n,$pattern,$inputValue,'-');
		}
	}
	
}