<?php

/**
 * problem: https://leetcode.com/problems/longest-palindromic-substring
 * date: 28.03.2024
 * @param string $s
 * @return string
 */
function longestPalindrome($s)
{
    $expand = function ($left, $right, &$s) {

        while ($left >= 0 && $right < strlen($s) && $s[$left] == $s[$right]) {
            $left--;
            $right++;
        }

        return substr($s, $left, $right);
    };

    $result = "";

    for ($i = 0; $i < strlen($s); $i++) {
        $sub1 = $expand($i, $i, $s);

        if (strlen($sub1) > strlen($result)) {
            $result = $sub1;
        }

        $sub2 = $expand($i, $i + 1, $s);

        if (strlen($sub2) > strlen($result)) {
            $result = $sub2;
        }
    }

    return $result;
}
echo longestPalindrome("babad"); // bab

// Example 1:
// Input: s = "babad"
// Output: "bab"
// Explanation: "aba" is also a valid answer.

// Example 2:
// Input: s = "cbbd"
// Output: "bb"