<?php
// https://leetcode.com/problems/two-sum/


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {      
        $_n=0;
        foreach($nums as $k=>$num){
            $_n=$target-$num;            
            $_f=$nums;
            unset($_f[$k]);            
            foreach($_f as $_k=> $f){
                if($f==$_n){
                    return [$k,$_k];
                }
            }
                       
        }
    }
}

$test1=new Solution();
print_r($test1->twoSum([2,7,11,15],18));

$test2=new Solution();
print_r($test2->twoSum([3,2,4],6));

$test3=new Solution();
print_r($test3->twoSum([3,3],6));