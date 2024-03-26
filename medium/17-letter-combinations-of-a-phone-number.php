<?php

/**
 * problem: https://leetcode.com/problems/letter-combinations-of-a-phone-number
 * date: 23.03.2024
 * @param string $digits
 * @return array
 */
function letterCombinations($digits)
{
    if (strlen($digits) === 0) {
        return [];
    }

    $combinations = [
        "2" => "abc",
        "3" => "def",
        "4" => "ghi",
        "5" => "jkl",
        "6" => "mno",
        "7" => "pqrs",
        "8" => "tuv",
        "9" => "wxyz",
    ];

    $result = [];

    if (strlen($digits) === 1) {

        for ($i = 0; $i < strlen($combinations[$digits[0]]); $i++) {
            $result[] = $combinations[$digits[0]][$i];
        }

        return $result;
    }

    $letters = [];

    for ($i = 0; $i < strlen($digits); $i++) {
        $letters[] = $combinations[$digits[$i]];
    }

    genCom($letters, 0, "", $result);

    return $result;
}

function genCom($array, $currentIndex = 0, $currentCombination = "", &$result = [])
{
    // Base case: If the current index is equal to the size of the array, add the current combination to the result
    if ($currentIndex == count($array)) {
        $result[] = $currentCombination;
        return;
    }

    // Loop through each character in the current element of the array
    for ($i = 0; $i < strlen($array[$currentIndex]); $i++) {
        genCom($array, $currentIndex + 1, $currentCombination . $array[$currentIndex][$i], $result);
    }
    // foreach ($array[$currentIndex] as $char) {
    //     // Recursively generate combinations for the next elements in the array
    //     genCom($array, $currentIndex + 1, $currentCombination . $char, $result);
    // }
}

print_r(letterCombinations("22"));

// Example 1:
// Input: digits = "23"
// Output: ["ad","ae","af","bd","be","bf","cd","ce","cf"]

// Example 2:
// Input: digits = ""
// Output: []

// Example 3:
// Input: digits = "2"
// Output: ["a","b","c"]
