<?php

/**
 * problem: https://leetcode.com/problems/excel-sheet-column-number
 * date: 23.03.2024
 * @param string $columnTitle
 * @return int
 */
function titleToNumber($columnTitle)
{

    $alphabetArray=array_flip(range("A","Z"));
    
    $sum=0;    
    
    $length=strlen($columnTitle)-1;
    
    for($i=0; $i<strlen($columnTitle); $i++){    
        
        $sum=$sum+($alphabetArray[$columnTitle[$i]]+1)*pow(26,$length--);
    }

    return $sum;
}
echo titleToNumber("ZY");

// For example:
// A -> 1
// B -> 2
// C -> 3
// ...
// Z -> 26
// AA -> 27
// AB -> 28

// Example 1:
// Input: columnTitle = "A"
// Output: 1

// Example 2:
// Input: columnTitle = "AB"
// Output: 28

// Example 3:
// Input: columnTitle = "ZY"
// Output: 701
