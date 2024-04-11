<?php

/**
 * problem: https://leetcode.com/problems/reverse-string-ii/
 * date: 11.04.2024
 * @param string $s
 * @param int $k
 * @return string
 */
function reverseStr($s, $k)
{
    $s_legth=strlen($s);   

    if($k===1){
        return $s;
    }

    if($k>$s_legth){
        $k=$s_legth;
    }
    
    $counter=0;

    $k=$k-1;

    while(true){     
        
        if($counter>$k){
            break;
        }

        $left_char=$s[$counter];
        
        $right_char=$s[$k];        
        
        $s[$counter]=$right_char;
        
        $s[$k]=$left_char;       

        $counter++;
        
        $k--;
    }

    return $s;
}
echo reverseStr("abcd",4); 

// Example 1:
// Input: s = "abcdefg", k = 2
// Output: "bacdfeg"

// Example 2:
// Input: s = "abcd", k = 2
// Output: "bacd"
