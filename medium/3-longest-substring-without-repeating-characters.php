<?php

class Solution
{

    /**
     * problem: https://leetcode.com/problems/longest-substring-without-repeating-characters
     * date: 07.04.2024
     * @param string $s
     * @return int
     */
    function lengthOfLongestSubstring($s)
    {

        $map = [];
        $index = 0;
        $map[$index] = "";
        $count_of_s = strlen($s) - 1;
        $highest_string_containing_index=0;
        for ($i = 0; $i <= $count_of_s; $i++) {

            $map[$index] = $s[$i];

            for ($n = $i + 1; $n <= $count_of_s; $n++) {

                $letter = $s[$n];
                $contains = strpos($map[$index], $letter);

                if ($contains !== false) {
                    break;
                } else {
                    $map[$index] = $map[$index] . $letter;
                }
            }

            if (strlen($map[$highest_string_containing_index]) < strlen($map[$index])) {
                $highest_string_containing_index = $index;
            }

            $index++;


            // print_r($map);

        }

        return strlen($map[$highest_string_containing_index]);
    }
}

$s = new Solution;
echo $s->lengthOfLongestSubstring("pwwkew");


// Example 1:
// Input: s = "abcabcbb"
// Output: 3
// Explanation: The answer is "abc", with the length of 3.

// Example 2:
// Input: s = "bbbbb"
// Output: 1
// Explanation: The answer is "b", with the length of 1.

// Example 3:
// Input: s = "pwwkew"
// Output: 3
// Explanation: The answer is "wke", with the length of 3.
// Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.