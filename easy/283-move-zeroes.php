<?php

/**
 * problem: https://leetcode.com/problems/move-zeroes
 * date: 31.03.2024
 * @param int[] $nums
 * @return NULL
 */
function moveZeroes(&$nums)
{
    for ($i = 0; $i < count($nums); $i++) {

        if ($nums[$i] === 0) {
            $nums[] = 0;
            unset($nums[$i]);
        }
    }
}

$nums=[0,0,1,1,0,9,10];
moveZeroes($nums);
print_r($nums);

