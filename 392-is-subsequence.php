<?php

/**
 * url: https://leetcode.com/problems/is-subsequence/
 * date: 12.03.2024
 * @param string $s
 * @param string $t
 * @return bool
 */

//  Example 1:
// Input: s = "abc", t = "ahbgdc"
// Output: true

// Example 2:
// Input: s = "axc", t = "ahbgdc"
// Output: false
function isSubsequence($s, $t)
{
    $start=0;

    for($i=0; $i<strlen($t); $i++){

        if($s[$start]===$t[$i]){
            $start++;
        }

    }

    return strlen($s)===$start;

}
echo isSubsequence("ahc","ahbgdc") ? "true" : "false";
