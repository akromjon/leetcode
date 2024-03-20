<?php

/**
 * problem: https://leetcode.com/problems/relative-ranks
 * date: 20.03.2024
 * @param int[] $score
 * @return string[]
 */
function findRelativeRanks($score)
{
    $sorted = $score;
    
    rsort($sorted);


    foreach ($sorted as $k => $s) {
        if($k===0){
            $sorted[$s]="Gold Medal";
        }elseif($k===1){
            $sorted[$s]="Silver Medal";
        }elseif($k===2){
            $sorted[$s]="Bronze Medal";
        }else{
            $sorted[$s]=$k+1;
        }
    }

    $arr=[];

    foreach($score as $s){
        $arr[]=(string)$sorted[$s];
    }

    return $arr;
}
print_r(findRelativeRanks([10,3,8,9,4]));
// Example 1:
// Input: score = [5,4,3,2,1]
// Output: ["Gold Medal","Silver Medal","Bronze Medal","4","5"]
// Explanation: The placements are [1st, 2nd, 3rd, 4th, 5th].

// Example 2:
// Input: score = [10,3,8,9,4]
// Output: ["Gold Medal","5","Bronze Medal","Silver Medal","4"]
// Explanation: The placements are [1st, 5th, 3rd, 2nd, 4th].