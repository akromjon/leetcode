<?php
/**
 * https://leetcode.com/problems/longest-palindromic-substring/
 * Constraints:
 * 1 <= s.length <= 1000
 * s consist of only digits and English letters.
 */ 
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {

        
        $wc=strlen($s);

        if(!($wc>=1 || $wc<=1000)){
            return $s;
        }

        $w="";

        for($a=0; $a<$wc;$a++){
            $w=$s[$a];
            for($b=$a;$b<$wc;$b++){
                if($w==$s[$b]){
                    
                }
            }
        }

        return $s;
    }
}

$test1=new Solution;
$test1->longestPalindrome("babad"); // bad, aba

// $test2=new Solution;
// $test2->longestPalindrome("cbbd"); // bb