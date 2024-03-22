<?php

/**
 * problem: https://leetcode.com/problems/string-to-integer-atoi
 * date: 21.03.2024
 * @param string $s
 * @return int
 */
function myAtoi($s)
{
    $s = trim($s);

    $numbers = [
        "1" => 1,
        "2" => 2,
        "3" => 3,
        "4" => 4,
        "5" => 5,
        "6" => 6,
        "7" => 7,
        "8" => 8,
        "9" => 9
    ];

    $str="";

    $is_negative=false;

    for ($i = 0; $i < strlen($s); $i++) {

        if($s[$i]==="-"){
            $is_negative=true;
        }

        if($s[$i]==="+"){
            $str=$str.$s[$i];
        }       

       
    }

    if(strpos("-",$str)!==false && strpos("+",$str)!==false){
        return 0;
    }    

    return (int) $str;
}

echo myAtoi("-+00040+1930 with words");

// Example 1:
// Input: s = "42"
// Output: 42

// Example 2:
// Input: s = "   -42"
// Output: -42

// Example 3:
// Input: s = "4193 with words"
// Output: 4193