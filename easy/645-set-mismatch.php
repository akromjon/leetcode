<?php

/**
 * date: 22.04.2024
 * problem: https://leetcode.com/problems/set-mismatch/
 * @param int[] $nums
 * @return int[]
 */
function findErrorNums($nums)
{
    $last_num = null;

    $result = [];

    sort($nums);

    for ($i = 0; $i < count($nums); $i++) {
        
        if ($last_num !== null && $nums[$i] === $last_num) {            

            $counter=1;
            
            while($counter<$last_num){
                
                if(!in_array($counter,$nums)){
                    $result[]=$last_num;
                    $result[]=$counter;
                    break;
                }

                $counter++;
            }

            if($counter>=$last_num){
                
                $result[]=$last_num;

                $counter=$last_num+1;
                
                while(in_array($counter,$nums)){
                    $counter++;
                }

                $result[]=$counter;


            }
            
        }

        $last_num=$nums[$i];
    }

    return $result;
}
print_r(findErrorNums([1,1]));
// Example 1:
// Input: nums = [1,2,2,4]
// Output: [2,3]

// Example 2:
// Input: nums = [1,1]
// Output: [1,2]
