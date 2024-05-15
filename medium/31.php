<?php


/**
 * @param Integer[] $nums
 * @return NULL
 */

function swap(&$nums, $start, $end)
{
    $temp = $nums[$start];
    $nums[$start] = $nums[$end];
    $nums[$end] = $temp;
}

function reverse(&$nums, $start)
{
    $end = count($nums) - 1;

    while ($start < $end) {
       
        swap($nums, $start, $end);
        
        $start++;
        
        $end--;
    }
}
function nextPermutation(&$nums)
{
   $i=count($nums)-2;

   while($i>=0 && $nums[$i]>=$nums[$i+1]){
        $i--;
   }

   if($i>=0){
        $j=count($nums)-1;

        while($j>=0 && $nums[$j]<=$nums[$i]){
            $j--;
        }

        swap($nums,$i,$j);


   }

   reverse($nums,$i+1);
}

$nums = [1, 1, 5, 4, 6];

nextPermutation($nums);

print_r($nums);
