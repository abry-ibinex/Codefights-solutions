<?php

function palindromeRearranging($inputString) {
    $inputArr = str_split($inputString);
    $inputValues = array_unique($inputArr);
    $oddCount = 0;
    foreach ($inputValues as $value){
        if ((count(array_keys($inputArr, $value)))%2==1)
            $oddCount++;
        
        if ($oddCount>1)
            return false;
    }
    return true;
}

/*
Given a string, find out if its characters can be rearranged to form a palindrome.

Example

For inputString = "aabb", the output should be
palindromeRearranging(inputString) = true.

We can rearrange "aabb" to make "abba", which is a palindrome.

Input/Output

    [execution time limit] 4 seconds (php)

    [input] string inputString

    A string consisting of lowercase English letters.

    Guaranteed constraints:
    1 ≤ inputString.length ≤ 50.

    [output] boolean

    true if the characters of the inputString can be rearranged to form a palindrome, false otherwise.
*/
?>
