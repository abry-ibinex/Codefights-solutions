<?php

function addBorder($picture) {
    $newPicture = [];
    $rows = count($picture);
    $cols = strlen($picture[0]);
    
    for($i=0;$i<$rows+2;$i++){
        $newPicture[$i] = '';
        if ($i==0 || $i==$rows+1)
            for ($j=0;$j<$cols+2;$j++)
                $newPicture[$i] .= "*";
        else{
            $newPicture[$i] .= "*";
            $newPicture[$i] .= $picture[$i-1];
            $newPicture[$i] .= "*";
        }
    }
    return $newPicture;
}

/*

Given a rectangular matrix of characters, add a border of asterisks(*) to it.

Example

For

picture = ["abc",
           "ded"]

the output should be

addBorder(picture) = ["*****",
                      "*abc*",
                      "*ded*",
                      "*****"]

Input/Output

    [execution time limit] 4 seconds (php)

    [input] array.string picture

    A non-empty array of non-empty equal-length strings.

    Guaranteed constraints:
    1 ≤ picture.length ≤ 100,
    1 ≤ picture[i].length ≤ 100.

    [output] array.string

    The same matrix of characters, framed with a border of asterisks of width 1.
*/

?>
