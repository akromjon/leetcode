<?php

/**
 * problem: https://leetcode.com/problems/jump-game/
 * date: 20.04.2024
 * @param int[] $nums
 * @return bool
 */
function canJump($nums)
{
    $total=count($nums);
    
    $counter=0;

    while($counter<$total){
        
        $temp=$nums[$counter];       

        if($temp>1){
            $counter+=$temp;
        }else{
            $counter++;
        }

        $temp=$nums[$counter];

        if($temp===0){
            return false;
        }

        if($counter===$total-1){
            return true;
        }

    }

    return true;
}
echo canJump([2,3,1,0,4]) ? "true" : "false";
// Example 1:
// Input: nums = [2,3,1,1,4]
// Output: true
// Explanation: Jump 1 step from index 0 to 1, then 3 steps to the last index.

// Example 2:
// Input: nums = [3,2,1,0,4]
// Output: false
// Explanation: You will always arrive at index 3 no matter what. Its maximum jump length is 0, which makes it impossible to reach the last index
