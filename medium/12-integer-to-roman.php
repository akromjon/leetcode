<?php

/**
 * 
 * 
 * https://leetcode.com/problems/integer-to-roman/description/
 */

/**
 * @param int $num
 * @return string
 */
function intToRoman($num)
{
    $romans = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    $roman = "";

    foreach ($romans as $key => $value) {

        while ($num >= $value) {
            $roman .= $key;
            $num = $num - $value;
        }
    }

    return $roman;
}
echo intToRoman(1994);

// Example 1:
// Input: num = 3
// Output: "III"
// Explanation: 3 is represented as 3 ones.

// Example 2:
// Input: num = 58
// Output: "LVIII"
// Explanation: L = 50, V = 5, III = 3.

// Example 3:
// Input: num = 1994
// Output: "MCMXCIV"
// Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.
