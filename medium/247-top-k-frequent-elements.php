<?php

/**
 * problem: https://leetcode.com/problems/top-k-frequent-elements/
 * date: 08.04.2024
 * @param int[] $nums
 * @param int $k
 * @return int[]
 */
function topKFrequent($nums, $k)
{
    $map = [];
    foreach ($nums as $n) {
        if (!array_key_exists($n, $map)) {
            $map[$n] = 1;
        } else {
            $map[$n]++;
        }
    }

    arsort($map);

    $resutl = [];

    $counter = 0;

    foreach ($map as $key => $m) {
        
        if ($counter === $k) {
            break;
        }

        $counter++;

        $resutl[] = $key;
    }

    return $resutl;
}
print_r(topKFrequent([4, 1, 1, 1, 2, 2, 3, 9, 9, 9, 9], 2));

// Example 1:
// Input: nums = [1,1,1,2,2,3], k = 2
// Output: [1,2]

// Example 2:
// Input: nums = [1], k = 1
// Output: [1]
