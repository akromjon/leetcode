<?php

/**
 * problem: https://leetcode.com/problems/subsets/
 * date: 26.04.2024
 * @param Integer[] $nums
 * @return Integer[][]
 */
function subsets($nums)
{
    $count = count($nums);
    $count_me = 0;
    $result=[];
    $result[]=[];
    $digit=0;

    while ($count_me < $count) {
        
        $temp=$nums[$count_me];

        $result[]=[$temp];
        
        $count_me++;
    }

    return $result;
}

print_r(subsets([1,2,3]));
