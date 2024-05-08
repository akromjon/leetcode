<?php

/**
 * @param int[] $nums
 * @return int[][]
 */
function backtract(&$nums,$path,&$result){
    if(count($nums)===count($path)) {
        $result[]=$path;
    }

    for($i=0; $i<count($nums); $i++){
        
        if(!in_array($nums[$i],$path)){
            $path[]=$nums[$i];
            backtract($nums,$path,$result);
            array_pop($path);
        }
    }
}
function permute($nums)
{
    $result=[];
    backtract($nums,[],$result);
    return $result;
}
print_r(permute([1,2,3]));
