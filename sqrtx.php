<?php

class Solution {

    /**
     * @param int $x
     * @return int
     */
    function mySqrt($x) {

        if($x==1) return 1;        

        $last=2;

        for($c=0;   $c<$x; $c++){
            
            $a=1/2*($last+$x/$last);
            $last=$a;

        }

        return (int)$a;
        
        

       
    }
}

$c=new Solution;
echo $c->mySqrt(2);