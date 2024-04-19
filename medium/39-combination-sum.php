<?php

/**
 * problem: https://leetcode.com/problems/combination-sum/
 * date: 01.04.2024
 * @param int[] $candidates
 * @param int $target
 * @return int[][]
 */

function combinationSum($candidates, $target)
{
    $result = [];

    $s=false;

    for ($i = 0; $i < count($candidates); $i++) {

        $temp = $candidates[$i];       

        if (array_search($target - $temp, $candidates) && !$s) {
            $s=true;
            $result[]= [$temp,$target-$temp];
        }

        $d=$target/$temp;

        if($target===$d*$temp){

            $arr=[];
            
            for($j=0; $j<$d; $j++){
                $arr[]=$temp;
            }

            $result[]=$arr;
        }


    }

    return $result;
}

print_r(combinationSum([2, 3, 5, 7, 8], 8));

// candidates = [2,3,6,7], target = 7
