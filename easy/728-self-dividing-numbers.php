<?php

/**
 * problem: https://leetcode.com/problems/self-dividing-numbers
 * date: 13.04.2024
 * @param int $left
 * @param int $right
 * @return int[]
 */
function selfDividingNumbers($left, $right)
{
    $results=[];

    foreach(range($left,$right) as $num){
        
        $str_num=(string)$num;

        for($i=0; $i<strlen($str_num); $i++){
            
            $int_num=(int)$str_num[$i];
            
            if($int_num===0 || $num%$int_num!==0){
                $str_num=false;
                break;
            }
        }

        if($str_num!==false){
            $results[]=$num;
        }


    }

    return $results;
}

print_r(selfDividingNumbers(1,22));
