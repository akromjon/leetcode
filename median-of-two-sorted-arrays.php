<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {

        $merged = array_merge($nums1,$nums2);

        $total=count($merged);
        // // true is even
        // // false is odd
        $is_odd_or_even=$total % 2 == 0 ? true : false;
        
        $num=$total/2;
        
        if($is_odd_or_even){
            return (float) (($merged[$num-1]+$merged[$num])/2);
        }else{
            return (float) $merged[$num-0.5];
        }       

    }
}

$s = new Solution;
// [1,2,3,5] [8,9,10,11]
echo $s->findMedianSortedArrays([1,2,3,5], [8,9,10,11]);
