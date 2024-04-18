<?php

/**
 * problem: https://leetcode.com/problems/sort-colors/
 * date: 19.04.2024
 * @param int[] $nums
 * @return NULL
 */
function sortColors(&$nums)
{
    $n=count($nums);
    
    for($i=0; $i<$n-1; $i++){

        for($m=0; $m<$n-1-$i; $m++){
            if($nums[$m]>$nums[$m+1]){
                $temp=$nums[$m];
                $nums[$m]=$nums[$m+1];
                $nums[$m+1]=$temp;
            }
        }

    }
}
$arr=[2,0,2,1,1,0];
sortColors($arr);
print_r($arr);

// Example 1:
// Input: nums = [2,0,2,1,1,0]
// Output: [0,0,1,1,2,2]

// Example 2:
// Input: nums = [2,0,1]
// Output: [0,1,2]
