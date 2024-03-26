<?php

/**
 * problem: https://leetcode.com/problems/merge-sorted-array
 * date: 22.03.2024
 * @param int[] $nums1
 * @param int $m
 * @param int[] $nums2
 * @param int $n
 * @return NULL
 */
function merge(&$nums1, $m, $nums2, $n)
{
    $nums1 = array_merge($nums1, $nums2);

    sort($nums1);

    foreach ($nums1 as $k => $num) {
        if($n===0){
            break;
        }
        if ($num === 0) {
            unset($nums1[$k]);
            $n--;
        } 
    }
}
$nums = [2, 2, 3, 0, 0, 0];
$numa = &$nums;
merge($numa, 3, [1, 5, 6], 3);
print_r($numa);

// Example 1:
// Input: nums1 = [2,2,3,0,0,0], m = 3, nums2 = [1,5,6], n = 3
// Output: [1,2,2,3,5,6]
// Explanation: The arrays we are merging are [1,2,3] and [2,5,6].
// The result of the merge is [1,2,2,3,5,6] with the underlined elements coming from nums1.

// Example 2:
// Input: nums1 = [1], m = 1, nums2 = [], n = 0
// Output: [1]
// Explanation: The arrays we are merging are [1] and [].
// The result of the merge is [1].

// Example 3:
// Input: nums1 = [0], m = 0, nums2 = [1], n = 1
// Output: [1]
// Explanation: The arrays we are merging are [] and [1].
// The result of the merge is [1].
// Note that because m = 0, there are no elements in nums1. The 0 is only there to ensure the merge result can fit in nums1.
