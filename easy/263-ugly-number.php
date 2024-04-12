<?php

/**
 * problem: https://leetcode.com/problems/ugly-number/
 * date: 12.04.2024
 * @param int $n
 * @return bool
 */
function isUgly($n)
{
    while($n>1){
        if($n%2===0){
            $n=$n/2;
        }elseif($n%3===0){
            $n=$n/3;
        }elseif($n%5){
            $n=$n/5;
        }
        else{
            return false;
        }        
    }

    return $n==1;
}
