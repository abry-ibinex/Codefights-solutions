<?php

function isLucky($n) {
    $nString = (string) $n;
    $nLen = strlen($nString);
    $firstHalf = str_split(substr($nString,0,$nLen/2));
    $secondHalf = str_split(substr($nString,$nLen/2));
    
    $firstHalfSum = 0;
    $secondHalfSum= 0;
    
    foreach ($firstHalf as $item){
        $firstHalfSum += $item;
    }
    foreach ($secondHalf as $item){
        $secondHalfSum += $item;
    }
    
    if ($firstHalfSum == $secondHalfSum)
        return true;
    return false;
}

/*

Ticket numbers usually consist of an even number of digits. A ticket number is considered lucky if the sum of the first half of the digits is equal to the sum of the second half.

Given a ticket number n, determine if it's lucky or not.

Example

    For n = 1230, the output should be
    isLucky(n) = true;
    For n = 239017, the output should be
    isLucky(n) = false.

Input/Output

    [execution time limit] 4 seconds (php)

    [input] integer n

    A ticket number represented as a positive integer with an even number of digits.

    Guaranteed constraints:
    10 ≤ n < 106.

    [output] boolean

    true if n is a lucky ticket number, false otherwise.
*/

?>
