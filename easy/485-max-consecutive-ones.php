<?php

/**
 * problem: https://leetcode.com/problems/max-consecutive-ones
 * date: 04.04.2024
 * @param int[] $nums
 * @return int
 */
function findMaxConsecutiveOnes($nums)
{
    $highest=0;
    $counter=0;

    for($i=0; $i<count($nums); $i++){
        
        if($nums[$i]===0){
            $counter=0;
        }elseif($nums[$i]===1){
            $counter++;
        }

        if($counter>$highest){
            $highest=$counter;
        }
    }

    return $highest;
}
echo findMaxConsecutiveOnes([1,1,0,1,1,1,0,1,1,1,1,1,1]);

// Example 1:
// Input: nums = [1,1,0,1,1,1]
// Output: 3
// Explanation: The first two digits or the last three digits are consecutive 1s. The maximum number of consecutive 1s is 3.

// Example 2:
// Input: nums = [1,0,1,1,0,1]
// Output: 2
