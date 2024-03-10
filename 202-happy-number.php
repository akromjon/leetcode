<?php

/**
 * https://leetcode.com/problems/happy-number/
 * date: 10.03.2024
 * @param int $n
 * @return bool
 */

function isHappy($n)
{
    $s=(string) $n;

    $nums=[];

    $nums[]=$n;

    $isHappy=false;

    $stopTheLoop=true;

    while($stopTheLoop){

        $sum=0;

        for($i=0; $i<strlen($s); $i++){

            $sum+=(int)$s[$i]*(int)$s[$i];

        }

        $s=(string)$sum;

        if($sum===1){
            
            $isHappy=true;
            
            $stopTheLoop=false;
        }

        if(in_array($sum,$nums)){
            $stopTheLoop=false;
        }

        $nums[]=$sum;

        
        
    }

    return $isHappy;
}

echo isHappy(19) ? "true": "false" ."\n"; // true
echo isHappy(23) ? "true": "false" . "\n"; // true
echo isHappy(2) ? "true": "false" ."\n"; // false


