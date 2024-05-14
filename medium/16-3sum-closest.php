<?php

/**
 * problem: https://leetcode.com/problems/3sum-closest
 * date: 29.03.2024
 * @param int[] $nums
 * @param int $target
 * @return int
 */


function threeSumClosest($nums, $target)
{
    sort($nums);

    $res=$nums[0]+$nums[1]+$nums[2];

    for($i=0; $i<count($nums)-2; $i++){
        $s=$i+1;
        $e=count($nums)-1;

        while($s<$e){
            $sum=$nums[$s]+$nums[$e]+$nums[$i];

            if(abs($sum-$target)<abs($res-$target)){
                $res=$sum;
            }

            if ($sum<$target){
                $s++;
            }else{
                $e--;
            }


        }
    }

    return $res;
   
}

echo threeSumClosest([-1, 2, 1, -4], 1);

// Example 1:
// Input: nums = [-1,2,1,-4], target = 1
// Output: 2
// Explanation: The sum that is closest to the target is 2. (-1 + 2 + 1 = 2).

// Example 2:
// Input: nums = [0,0,0], target = 1
// Output: 0
// Explanation: The sum that is closest to the target is 0. (0 + 0 + 0 = 0).

// Example 3:
// nums =
// [1,1,8,9,10]
// target= 9
// output: 10
