<?php

// problem: https://leetcode.com/problems/roman-to-integer
function romanToInt($s)
{
    $list = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];

    $total=0;

    for(    $i=0;   $i<strlen($s);  $i++    ){       
        
        if(isset($s[$i+1]) && $list[$s[$i]]<$list[$s[$i+1]]){
            $total=$total+($list[$s[$i]]*(-1));
        }
        else{
            $total=$total+$list[$s[$i]];
        }

        

    }

    return $total;


}

echo romanToInt("IV"); //58
