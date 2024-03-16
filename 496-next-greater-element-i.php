<?php

/**
 * url: https://leetcode.com/problems/next-greater-element-i/
 * date: 16.03.2024
 * @param int[] $nums1
 * @param int[] $nums2
 * @return int[]
 */
function nextGreaterElement($nums1, $nums2)
{
    $arr = [];

    foreach ($nums1 as $n) {

        $p = array_search($n, $nums2);

        if ($p === false) {
            continue;
        }

        if ($p === count($nums2) - 1) {

            $arr[] = -1;

            continue;
        }

        for ($i = $p + 1; $i < count($nums2); $i++) {

            if ($n < $nums2[$i]) {

                $arr[] = $nums2[$i];
                
                break;

            } 
            if($i===count($nums2)-1 && $n > $nums2[$i]){
                $arr[] = -1;
            }
        }

        


    }

    return $arr;
}

print_r(nextGreaterElement([1, 3, 5, 2, 4], [6, 5, 4, 3, 2, 1, 7]));
print_r(nextGreaterElement([4,1,2],  [1,3,4,2]));

//[7,7,7,7,7]


// Example 1:

// Input: nums1 = [4,1,2], nums2 = [1,3,4,2]
// Output: [-1,3,-1]
// Explanation: The next greater element for each value of nums1 is as follows:
// - 4 is underlined in nums2 = [1,3,4,2]. There is no next greater element, so the answer is -1.
// - 1 is underlined in nums2 = [1,3,4,2]. The next greater element is 3.
// - 2 is underlined in nums2 = [1,3,4,2]. There is no next greater element, so the answer is -1.


// Example 2:

// Input: nums1 = [2,4], nums2 = [1,2,3,4]
// Output: [3,-1]
// Explanation: The next greater element for each value of nums1 is as follows:
// - 2 is underlined in nums2 = [1,2,3,4]. The next greater element is 3.
// - 4 is underlined in nums2 = [1,2,3,4]. There is no next greater element, so the answer is -1. -->
