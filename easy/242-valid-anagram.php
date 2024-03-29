<?php

/**
 * problem: https://leetcode.com/problems/valid-anagram
 * date: 29.03.2024
 * @param string $s
 * @param string $t
 * @return bool
 */
function isAnagram($s, $t)
{
    $cs = strlen($s);

    $ct = strlen($t);

    if ($cs !== $ct) {
        return false;
    }


    $map = [];

    for ($i = 0; $i < $cs; $i++) {

        if (isset($map[$s[$i]])) {
            $map[$s[$i]] = $map[$s[$i]] + 1;
        } else {
            $map[$s[$i]] = 1;
        }
    }

    for ($i = 0; $i < $ct; $i++) {

        if (isset($map[$t[$i]])) {

            $map[$t[$i]] = $map[$t[$i]] - 1;

            if ($map[$t[$i]] === 0) {
                unset($map[$t[$i]]);
            }
        }else{
            return false;
        }
    }   

    return count($map)===0;
}
echo isAnagram("anagram", "nagaram") ? "true" : "false";
echo "\n";
echo isAnagram("rat", "car") ? "true" : "false";
echo "\n";
echo isAnagram("aacc", "acac") ? "true" : "false";


// Example 1:
// Input: s = "anagram", t = "nagaram"
// Output: true

// Example 2:
// Input: s = "rat", t = "car"
// Output: false
