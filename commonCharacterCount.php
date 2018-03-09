<?php

function commonCharacterCount($s1, $s2) {
    $s1Arr = str_split($s1);
    $s2Arr = str_split($s2);
    $commonCount = 0;
    
    foreach ($s1Arr as $s1Item){
        if(in_array($s1Item,$s2Arr)){
            $commonCount++;
            foreach ($s2Arr as $key => $s2Item){
                if ($s2Item == $s1Item){
                    unset ($s2Arr[$key]);
                    break;
                }
            }
        }
    }
    
    return $commonCount;
}

/*

Given two strings, find the number of common characters between them.

Example

For s1 = "aabcc" and s2 = "adcaa", the output should be
commonCharacterCount(s1, s2) = 3.

Strings have 3 common characters - 2 "a"s and 1 "c".

Input/Output

    [execution time limit] 4 seconds (php)

    [input] string s1

    A string consisting of lowercase latin letters a-z.

    Guaranteed constraints:
    1 ≤ s1.length ≤ 15.

    [input] string s2

    A string consisting of lowercase latin letters a-z.

    Guaranteed constraints:
    1 ≤ s2.length ≤ 15.

    [output] integer
*/

?>
