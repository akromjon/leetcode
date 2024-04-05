<?php

/**
 * problem: https://leetcode.com/problems/intersection-of-two-arrays-ii/
 * date: 05.04.2024
 * @param int[] $nums1
 * @param int[] $nums2
 * @return int[]
 */

//  nums1 =
// [1,2,2,1]
// nums2 =
// [2,2]
function intersect($nums1, $nums2)
{
    $count_of_nums1 = count($nums1);

    $count_of_nums2 = count($nums2);

    if ($count_of_nums1 <= $count_of_nums2) {
        return determine($nums1, $nums2, $count_of_nums1);
    }

    return determine($nums2, $nums1, $count_of_nums2);
}

function determine(&$nums1, &$nums2, $count_of_nums1): array
{
    $result = [];

    for ($i = 0; $i < $count_of_nums1; $i++) {
        
        $index = array_search($nums1[$i], $nums2);
        
        if (false !== $index) {
            
            $result[] = $nums1[$i];
            
            unset($nums2[$index]);
        }
    }

    return $result;
}

print_r(intersect([3, 1, 2], [1, 1]));
