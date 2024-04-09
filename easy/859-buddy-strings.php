<?php

/**
 * date: 09.04.2024
 * problem: https://leetcode.com/problems/buddy-strings/
 * @param string $s
 * @param string $goal
 * @return bool
 */
function buddyStrings($s, $goal)
{
    $map = [];

    for ($i = 0; $i < strlen($s); $i++) {

        $temp = $s[$i];

        if (array_key_exists($temp, $map)) {

            if($map[$temp]!==$goal[$i]){
                return false;
            }
            
        } else {
            $map[$temp] = $goal[$i];
        }
    }

    return true;
}

echo buddyStrings("ab", "ab") ? "True" : "False";



// Example 1:
// Input: s = "ab", goal = "ba"
// Output: true
// Explanation: You can swap s[0] = 'a' and s[1] = 'b' to get "ba", which is equal to goal.

// Example 2:
// Input: s = "ab", goal = "ab"
// Output: false
// Explanation: The only letters you can swap are s[0] = 'a' and s[1] = 'b', which results in "ba" != goal.

// Example 3:
// Input: s = "aa", goal = "aa"
// Output: true
// Explanation: You can swap s[0] = 'a' and s[1] = 'a' to get "aa", which is equal to goal.