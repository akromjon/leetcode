<?php

/**
 * problem: https://leetcode.com/problems/palindrome-number
 * date: 24.03.2024
 * @param int $x
 * @return bool
 */
function isPalindrome($x)
{
    // we use two pointer technique

    $strx = (string)$x;

    $length = strlen($strx)-1;

    $start = 0;

    while ($start < $length) {
        
        if ($strx[$start] !== $strx[$length]) {
            return false;
        }

        $start++;
        $length--;
    }

    return true;
}
echo isPalindrome(-111) ? "true" : "false";
// Example 1:
// Input: x = 121
// Output: true
// Explanation: 121 reads as 121 from left to right and from right to left.

// Example 2:
// Input: x = -121
// Output: false
// Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
// Example 3:

// Input: x = 10
// Output: false
// Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
