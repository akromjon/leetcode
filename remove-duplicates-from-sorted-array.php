<?php

function removeDuplicates(&$nums)
{    
    $result=[];

    sort($nums);

    foreach($nums as $k => $num){        
       
        if(!in_array($num,$result)){
            $result[]=$num;            
        }

    }

    $nums=$result;

    return count($result);
}

$nums=[1,1,2];
$r=&$nums;
print_r(removeDuplicates($r)); // 5

