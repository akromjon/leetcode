<?php

/**
 * url: https://leetcode.com/problems/jewels-and-stones
 * date: 18.03.2024
 * @param string $jewels
 * @param string $stones
 * @return int
 */
function numJewelsInStones($jewels, $stones)
{
    $counter=0;
    
    for($i=0; $i<strlen($jewels); $i++){
        
        for($o=0; $o<strlen($stones); $o++){
            if($jewels[$i]===$stones[$o]){
                $counter++;
            }
        }
        
    }

    return $counter;

}
echo numJewelsInStones("aA","aAAbbbb");
// Example 1:
// Input: jewels = "aA", stones = "aAAbbbb"
// Output: 3

// Example 2:
// Input: jewels = "z", stones = "ZZ"
// Output: 0