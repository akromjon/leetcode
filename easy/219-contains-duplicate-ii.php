<?php

/**
 * problem: https://leetcode.com/problems/contains-duplicate-ii
 * date: 06.04.2024
 * @param int[] $nums
 * @param int $k
 * @return bool
 */
function containsNearbyDuplicate($nums, $k)
{
    $map = [];

    for ($i = 0; $i < count($nums); $i++) {

        if (array_key_exists($nums[$i], $map)) {
            if ($i - $map[$nums[$i]] <= $k) {
                return true;
            }else{
                $map[$nums[$i]] = $i;
            }
        } else {
            $map[$nums[$i]] = $i;
        }
    }

    return false;
}

echo containsNearbyDuplicate([4, 7, 8, 9, 9], 3) ? "true" : "false";

// Example 1:
// Input: nums = [1,2,3,1], k = 3
// Output: true

// Example 2:
// Input: nums = [1,0,1,1], k = 1
// Output: true

// Example 3:
// Input: nums = [1,2,3,1,2,3], k = 2
// Output: false