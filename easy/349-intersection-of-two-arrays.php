<?php

/**
 * problem: https://leetcode.com/problems/intersection-of-two-arrays
 * date: 31.03.2024
 * @param int[] $nums1
 * @param int[] $nums2
 * @return int[]
 */
function intersection($nums1, $nums2)
{
    if (count($nums1) >= count($nums2)) {
        return itorate($nums2, $nums1);
    }

    return itorate($nums1, $nums2);
}
function itorate($first_array, $second_array): array
{

    $result = [];    

    for ($i = 0; $i < count($first_array); $i++) {

        if (in_array($first_array[$i],$second_array) && !in_array($first_array[$i],$result)) {
            $result[] = $first_array[$i];
        }
    }

    return $result;
}
print_r(intersection([4,9,5], [9,4,9,8,4]));

// Example 1:
// Input: nums1 = [1,2,2,1], nums2 = [2,2]
// Output: [2]

// Example 2:
// Input: nums1 = [4,9,5], nums2 = [9,4,9,8,4]
// Output: [9,4]
// Explanation: [4,9] is also accepted.
