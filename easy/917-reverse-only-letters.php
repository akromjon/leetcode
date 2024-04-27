<?php

/**
 * problem: https://leetcode.com/problems/reverse-only-letters/
 * date: 28.04.2024
 * @param string $s
 * @return string
 */
function reverseOnlyLetters($s)
{
    $left=0;
    
    $right=strlen($s)-1;

    $all_letters=array_merge(range("A","Z"),range("a","z"));

    while($left<$right){
        
        $l=$s[$left];

        if(!in_array($l,$all_letters)){
            $left++;
            continue;
        }
        
        $r=$s[$right];

        if(!in_array($r,$all_letters)){
            $right--;
            continue;
        }

        $s[$right]=$l;
        $s[$left]=$r;

        $left++;
        $right--;
    }

    return $s;

}
echo reverseOnlyLetters("a-ro-");

// Example 1:
// Input: s = "ab-cd"
// Output: "dc-ba"

// Example 2:
// Input: s = "a-bC-dEf-ghIj"
// Output: "j-Ih-gfE-dCba"

// Example 3:
// Input: s = "Test1ng-Leet=code-Q!"
// Output: "Qedo1ct-eeLg=ntse-T!"
