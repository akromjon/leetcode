<?php

/**
 * @param string $s
 * @return string
 */
function reverseVowels($s)
{
    $left = 0;

    $right = strlen($s) - 1;

    $vowels = ["a", "e", "u", "o", "i", "A", "E", "U", "O", "I"];

    $leftMap = [];
    $rightMap = [];

    while ($left <= $right) {

        if (in_array($s[$left], $vowels)) {

            $leftMap[$s[$left]][] = $left;
        }

        if (in_array($s[$right], $vowels)) {
            $rightMap[$s[$right]][] = $right;
        }

        $left++;

        $right--;
    }

    print_r($leftMap);
    exit(1);

    return filter($leftMap, $rightMap, $s);

}
function filter($biggerArray, $smallarArr, $s)
{

    $Bkeys = array_keys($biggerArray);

    $Skeys = array_keys($smallarArr);

    foreach ($Bkeys as $key => $value) {

        if (isset($Skeys[$key])) {
            $temp = $Skeys[$key];
            $s[$biggerArray[$value]] = $temp;
            $s[$smallarArr[$temp]] = $value;
        }
    }

    return $s;
}
echo reverseVowels("leetcode"); 
// "Euston saw I was not Sue."
// "euston saw I was not SuE." // correct
// "eustun sow a wIs nat SoE."


// Example 1:
// Input: s = "hello"
// Output: "holle"

// Example 2:
// Input: s = "leetcode"
// Output: "leotcede"
