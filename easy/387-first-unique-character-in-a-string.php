<?php

/**
 * problem: https://leetcode.com/problems/first-unique-character-in-a-string/
 * date: 03.04.2024
 * @param string $s
 * @return int
 */
function firstUniqChar($s)
{
    $arr = [];

    for ($i = 0; $i < strlen($s); $i++) {
        if (!array_key_exists($s[$i], $arr)) {
            $arr[$s[$i]] = 1;
        } else {
            $arr[$s[$i]]++;
        }
    }
    $str="";
    
    foreach($arr as $k=>$v){
        
        if($v===1){
            $str=$k;
            break;
        }
    }

    if($str===""){
        return -1;
    }

    return strpos($s,$str);   
}

echo firstUniqChar("aabb");

// Example 1:
// Input: s = "leetcode"
// Output: 0

// Example 2:
// Input: s = "loveleetcode"
// Output: 2

// Example 3:
// Input: s = "aabb"
// Output: -1
