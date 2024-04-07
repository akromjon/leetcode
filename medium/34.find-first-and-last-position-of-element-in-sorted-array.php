<?php

/**
 * problem: https://leetcode.com/problems/find-first-and-last-position-of-element-in-sorted-array
 * date: 07.04.2024
 * @param int[] $nums
 * @param int $target
 * @return int[]
 */
function searchRange($nums, $target)
{
    $count_of_nums = count($nums);

    $start = null;
    $end = null;

    for ($i = 0; $i < $count_of_nums; $i++) {

        if ($nums[$i] === $target && $start === null) {
            $start = $i;
        } elseif ($nums[$i] === $target && $start !== null) {
            $end = $i;
        }
    }

    if ($start === null && $end === null) {
        return [-1, -1];
    } elseif ($start !== null && $end === null) {
        return [$start, $start];
    } else {
        return [$start, $end];
    }
}

print_r(searchRange([5,7,7,8,8,10], 6));

// Example 1:
// Input: nums = [5,7,7,8,8,10], target = 8
// Output: [3,4]

// Example 2:
// Input: nums = [5,7,7,8,8,10], target = 6
// Output: [-1,-1]

// Example 3:
// Input: nums = [], target = 0
// Output: [-1,-1]