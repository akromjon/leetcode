<?php

/**
 * url: https://leetcode.com/problems/majority-element/
 * date: 13.03.2024
 * @param int[] $nums
 * @return int
 */

// Follow-up: Could you solve the problem in linear time and in O(1) space?

// Example 1:
// Input: nums = [3,2,3]
// Output: 3

// Example 2:
// Input: nums = [2,2,1,1,1,2,2]
// Output: 2
function majorityElement($nums)
{
    $resutl=[];

    $hk=0;

    for($i=0; $i<count($nums); $i++){
        
        if($i===0){
            $hk=$nums[$i];
        }
        
        if(isset($resutl[$nums[$i]])){
            $resutl[$nums[$i]]++;
        }
        else{
            $resutl[$nums[$i]]=1;
        }

        if($resutl[$nums[$i]]>$resutl[$hk]){
            $hk=$nums[$i];
        }
        
    }
       
    return $hk;
}
echo majorityElement([2,2,1,1,1,1,1,1,2,2]); 
echo "\n";
echo majorityElement([3,2,2,3,3]);
