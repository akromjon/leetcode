<?php

/**
 * problem: https://leetcode.com/problems/add-strings/
 * date: 05.04.2024
 * @param string $num1
 * @param string $num2
 * @return string
 */
function addStrings($num1, $num2)
{

    $numbers = [];

    foreach (range(0, 9) as $num) {
        $numbers["$num"] = $num;
    }

    $count_of_num1 = strlen($num1) - 1;
    $count_of_num2 = strlen($num2) - 1;
    $carry = 0;
    $result = "";

    while ($count_of_num1 >= 0 || $count_of_num2 >= 0 || $carry>0) {

        $n1 = 0;
        $n2 = 0;

        if ($count_of_num1 >= 0) {
            $n1 = $numbers[$num1[$count_of_num1]];
        }

        if ($count_of_num2 >= 0) {
            $n2 = $numbers[$num2[$count_of_num2]];
        }

        $add=$n2+$n1+$carry;

        if($add>9){
            $carry=1;            
            $add=((string)$add)[1];
        }else{
            $carry=0;
        }

        $result=$add.$result;

        $count_of_num1--;
        $count_of_num2--;
    }

    return $result;
}
echo addStrings("9", "1");



// Example 1:
// Input: num1 = "11", num2 = "123"
// Output: "134"

// Example 2:
// Input: num1 = "456", num2 = "77"
// Output: "533"

// Example 3:
// Input: num1 = "0", num2 = "0"
// Output: "0"
