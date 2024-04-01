<?php

/**
 * problem: https://leetcode.com/problems/combination-sum/
 * date: 01.04.2024
 * @param int[] $candidates
 * @param int $target
 * @return int[][]
 */

function checkOddOrEven(int $can, int $target): bool|array
{
    $result = [];

    if ($target % $can === 0) {

        for ($i = 0; $i < $target / $can; $i++) {
            $result[] = $can;
        }

        return $result;
    }

    return false;
}
function combinationSum($candidates, $target)
{
    $result = [];

    foreach ($candidates as $key => $can) {

        $temp = checkOddOrEven($can, $target);

        if ($temp !== false) {
            $result[][] = $temp;
        }
    }

    return $result;
}

print_r(combinationSum([2, 3, 6, 7], 7));

// candidates = [2,3,6,7], target = 7

/**
 * 
 * Solution:
 * - check even or odd
 * - check if it exists
 */
