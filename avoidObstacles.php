<?php

function avoidObstacles($inputArray) {
    $i = 2;
    $isDivisible = false;
    
    while(true){
        foreach ($inputArray as $input){
            if ($input % $i == 0){
                $isDivisible = true;
                break;
            } else
                $isDivisible = false;
        }
        if ($isDivisible == false)
            return $i;
        $i++;
    }
}

/*

You are given an array of integers representing coordinates of obstacles situated on a straight line.

Assume that you are jumping from the point with coordinate 0 to the right. You are allowed only to make jumps of the same length represented by some integer.

Find the minimal length of the jump enough to avoid all the obstacles.

Example

For inputArray = [5, 3, 6, 7, 9], the output should be
avoidObstacles(inputArray) = 4.

Check out the image below for better understanding:

Input/Output

    [execution time limit] 4 seconds (php)

    [input] array.integer inputArray

    Non-empty array of positive integers.

    Guaranteed constraints:
    2 ≤ inputArray.length ≤ 10,
    1 ≤ inputArray[i] ≤ 40.

    [output] integer

    The desired length.
*/

?>
