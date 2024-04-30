<?php

/**
 * date: 30.04.2024
 * problem: https://leetcode.com/problems/rotate-string/
 * @param string $s
 * @param string $goal
 * @return bool
 */
function rotateString($s, $goal)
{
    $left = "";
    $head = "";
    $count = strlen($s);

    for ($i = 0; $i < $count; $i++) {

        $left = substr($s, $i + 1, $count);
        
        $head = $head.$s[$i];
        
        if($left.$head===$goal){
        
            return true;
        
        }      

    }

    return false;

}
echo rotateString("abcde", "abced") ? "true" : "false";
// Example 1:
// Input: s = "abcde", goal = "cdeab"
// Output: true

// Example 2:
// Input: s = "abcde", goal = "abced"
// Output: false
