<?php

function arrayMaximalAdjacentDifference($inputArray) {
    $maxDiff = 0;
    foreach ($inputArray as $key => $input){
        if (isset($inputArray[$key+1]) && $maxDiff < abs($diff = $input - $inputArray[$key+1])){
            $maxDiff = $diff;
        }
    }
    return abs($maxDiff);
}

/*

Given an array of integers, find the maximal absolute difference between any two of its adjacent elements.

Example

For inputArray = [2, 4, 1, 0], the output should be
arrayMaximalAdjacentDifference(inputArray) = 3.

Input/Output

    [execution time limit] 4 seconds (php)

    [input] array.integer inputArray

    Guaranteed constraints:
    3 ≤ inputArray.length ≤ 10,
    -15 ≤ inputArray[i] ≤ 15.

    [output] integer

    The maximal absolute difference.
*/

?>
