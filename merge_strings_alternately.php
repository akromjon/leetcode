<?php
/***
 * https://leetcode.com/problems/merge-strings-alternately/?envType=study-plan-v2&envId=leetcode-75
 * 
 */
namespace Akromjon\Leetcode;
class merge_strings_alternately { 
    public function mergeAlternately($word1, $word2) {
        $result = '';
        $i = 0;
        $j = 0;
        while($i < strlen($word1) || $j < strlen($word2)){
            if($i < strlen($word1)){
                $result .= $word1[$i];
                $i++;
            }
            if($j < strlen($word2)){
                $result .= $word2[$j];
                $j++;
            }
        }
        return $result;  
    }
}

