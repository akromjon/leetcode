<?php

function firstMissingPositive($nums) {
        
    // sort($nums);

    $predict=1;

    foreach($nums as $k=>$num){
        
        if($num<=0){
            continue;
        }

        if($num==$predict){
            
            $predict++;
            
            continue;
        }      


    }

    return $predict;


}

echo firstMissingPositive([1,-1,0,2,3,9]); // 3;