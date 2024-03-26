<?php

/**
 * url: https://leetcode.com/problems/license-key-formatting/
 * date: 15.03.2024
 * @param string $s
 * @param int $k
 * @return string
 */

function licenseKeyFormatting($s, $k)
{

    $c=$k;

    $l="";

    for($i=strlen($s)-1; $i>=0; $i--){

        if($s[$i]!=="-"){
            
            $l=strtoupper($s[$i]).$l;

            $c--;            
        }
        
        if($c===0 && isset($s[$i-1]) && $s[$i-1]!=="-" && $i!==0){
            
            $l="-".$l;
            
            $c=$k;
        }        

    }

    return $l;
}
echo licenseKeyFormatting("---------a-a--a-a--------",2)."\n";
echo licenseKeyFormatting("5F3Z-2e-9-w",4)."\n";
echo licenseKeyFormatting("2-5g-3-J",2)."\n";


// Example 1:
// Input: s = "5F3Z-2e-9-w", k = 4
// Output: "5F3Z-2E9W"
// Explanation: The string s has been split into two parts, each part has 4 characters.
// Note that the two extra dashes are not needed and can be removed.

// Example 2:
// Input: s = "2-5g-3-J", k = 2
// Output: "2-5G-3J"
// Explanation: The string s has been split into three parts, each part has 2 characters except the first part as it could be shorter as mentioned above.
