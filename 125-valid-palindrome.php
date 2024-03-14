<?php

/**
 * url: https://leetcode.com/problems/valid-palindrome/
 * date: 14.03.2024
 * @param string $s
 * @return bool
 */
function isPalindrome($s)
{
    $range="";
    
    $p="";

    for(    $i=0; $i<strlen($s); $i++   ){
        
        $lower=strtolower($s[$i]);
        
        if(in_array($lower,range("a","z"))){

            $p=$p.$lower;
            $range=$lower.$range;

        }else if(in_array($lower,range(0,9))){
            $p=$p.$lower;
            $range=$lower.$range;
        }
    }

    echo $range."\n";

    return $range===$p;

}

echo isPalindrome("!bHvX!?!!vHbX") ? "true": "false";
// Example 1:

// Input: s = "A man, a plan, a canal: Panama"
// Output: true
// Explanation: "amanaplanacanalpanama" is a palindrome.
// Example 2:

// Input: s = "race a car"
// Output: false
// Explanation: "raceacar" is not a palindrome.
// Example 3:

// Input: s = " "
// Output: true
// Explanation: s is an empty string "" after removing non-alphanumeric characters.
// Since an empty string reads the same forward and backward, it is a palindrome.
 

