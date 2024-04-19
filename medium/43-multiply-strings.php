<?php

/**
 * url: https://leetcode.com/problems/multiply-strings
 * date: 15.03.2024
 * @param string $num1
 * @param string $num2
 * @return string
 */
function multiply($num1, $num2)
{
    $nums = [
        "0" => 0,
        "1" => 1,
        "2" => 2,
        "3" => 3,
        "4" => 4,
        "5" => 5,
        "6" => 6,
        "7" => 7,
        "8" => 8,
        "9" => 9
    ];

    $remainder=0;

    $sum="";

    $first_counter=strlen($num1)-1;

    $sum_array=[];

    while($first_counter>=0){

        $counter=strlen($num2)-1;
       
        while($counter>=0){
            
            $multiply=$nums[$num1[$first_counter]]*$nums[$num2[$counter]]+$remainder;

            if($multiply>9){

                $string_remainder=(string)$multiply;

                $remainder=$nums[$string_remainder[0]];

                $multiply=$string_remainder[1];

            }

            $sum=$multiply.$sum;                 

            $counter--;
        }
        
        if($remainder!==0){
            $sum=$remainder.$sum;
            $remainder=0;

        }

        $sum_array[$first_counter]=$sum;

        $first_counter--;

        $sum="";
       
    }

    foreach($sum_array as $k=> $value){
        
    }

    print_r($sum_array);    

   
}
echo multiply("222", "999");
