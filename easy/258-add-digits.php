<?php

/**
 * problem: https://leetcode.com/problems/add-digits
 * created date: 21.03.2024
 * updated date: 26.03.2024
 * @param int $num
 * @return int
 */
function addDigits($num)
{
    if ($num <= 9) {
        
       return $num;
    }

    $arr = [];

    $str_num = (string) $num;

    $arr[] = $str_num;

    $counter = 0;

    while (strlen($arr[$counter]) !== 1) {

        $last = (string)$arr[$counter];

        $sum = 0;

        for ($i = 0; $i < strlen($last); $i++) {
            $sum = $sum + (int) $last[$i];
        }

        $arr[] = $sum;

        $counter++;
    }

    return $arr[count($arr)-1];
}

echo addDigits(10);

// 0 <= num <= 231 - 1

// Example 1:
// Input: num = 38
// Output: 2
// Explanation: The process is
// 38 --> 3 + 8 --> 11
// 11 --> 1 + 1 --> 2 
// Since 2 has only one digit, return it.

// Example 2:
// Input: num = 0
// Output: 0
