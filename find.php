<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    
    sort($A);

    $start=1;

    for($c=0;$c<count($A)-1; $c++){
        if(!in_array($start,$A)){
            return $start;
        }else{
            $start++;
        }
    }

    
}

echo solution([1, 3, 6, 4, 1, 2]);


