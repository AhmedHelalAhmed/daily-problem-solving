<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades)
{
    for ($i = 0; $i < count($grades); $i++) {

        if ($grades[$i] < 38) {
            continue;
        }

        $number = $grades[$i];
        while ($number % 5 !== 0) {
            $number++;
        }

        if ($number - $grades[$i] < 3) {
            $grades[$i] = $number;
        }
    }
    return $grades;
}

echo implode("\n", gradingStudents([73, 67, 38, 33]));
