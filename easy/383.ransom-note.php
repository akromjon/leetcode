<?php

/**
 * problem: https://leetcode.com/problems/ransom-note/
 * date:03.04.2024
 * @param string $ransomNote
 * @param string $magazine
 * @return bool
 */
function canConstruct($ransomNote, $magazine)
{
    for($i=0; $i<strlen($ransomNote); $i++){

        $str_not_exists=strpos($magazine,$ransomNote[$i]);

        if($str_not_exists!==false){

            $magazine[$str_not_exists]="1";
        }else{
            return false;
        }
    }

    return true;
}
echo canConstruct("aa", "aba") ? "true" : "false";

// Example 1:
// Input: ransomNote = "a", magazine = "b"
// Output: false

// Example 2:
// Input: ransomNote = "aa", magazine = "ab"
// Output: false

// Example 3:
// Input: ransomNote = "aa", magazine = "aab"
// Output: true
