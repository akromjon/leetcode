<?php

/**
 * problem: https://leetcode.com/problems/keyboard-row
 * date: 04.04.2024
 * @param string[] $words
 * @return string[]
 */
function findWords($words)
{
    $row1 = "qwertyuiop";
    $row2 = "asdfghjkl";
    $row3 = "zxcvbnm";

    $row_words = [];

    foreach ($words as $key => $word) {

        $find_row = "";

        for ($i = 0; $i < strlen($word); $i++) {

            $letter=strtolower($word[$i]);

            if (strpos($row1, $letter) !== false) {

                if ($find_row !== "" && $find_row !== "row1") {
                    $find_row = "";
                    break;
                }

                $find_row = "row1";
            } elseif (strpos($row2, $letter) !== false) {

                if ($find_row !== "" && $find_row !== "row2") {
                    $find_row = "";
                    break;
                }

                $find_row = "row2";
            } elseif (strpos($row3, $letter) !== false) {

                if ($find_row !== "" && $find_row !== "row3") {
                    $find_row = "";
                    break;
                }

                $find_row = "row3";
            }
        }

        if ($find_row !== "") {
            $row_words[] = $word;
        }
    }


    return $row_words;
}

print_r(findWords(["Hello", "PAlaska", "Dad", "Peace"]));

// In the American keyboard:

// the first row consists of the characters "qwertyuiop",
// the second row consists of the characters "asdfghjkl", and
// the third row consists of the characters "zxcvbnm".

// Example 1:
// Input: words = ["Hello","Alaska","Dad","Peace"]
// Output: ["Alaska","Dad"]

// Example 2:
// Input: words = ["omk"]
// Output: []

// Example 3:
// Input: words = ["adsdf","sfd"]
// Output: ["adsdf","sfd"]
