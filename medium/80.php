<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums)
{

    $result = [];

    foreach ($nums as $k => $n) {

        $key=array_key_exists($n,$result);

        if($key===true){
            
            if($result[$n]<2){
                $result[$n]=$result[$n]+1;
            }else{
                unset($nums[$k]);
            }

        }else{
            $result[$n]=1;
        }
        
    }

    print_r($result);
}
$nums=[0,0,1,1,1,1,2,3,3];
removeDuplicates($nums);

print_r($nums);
