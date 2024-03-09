<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function singleNumber($nums) {
        
        $t=count($nums);

        if($t===1) return $nums[0];
        
        $dup=[];

        $n=0;

        for( $c=0; $c<$t; $c++ ){            

            for($d=$c+1;$d<$t; $d++){

                if($nums[$c]===$nums[$d]){
                    
                    $dup[]=$nums[$d];

                }
            
            }  

        }        

        return $n;
    }
}

$s=new Solution;
echo $s->singleNumber([7,4,1,2,1,2,4,9,9,3,3]); // 9
