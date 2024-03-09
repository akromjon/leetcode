<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {

        $h=0;

        $r=[];  
        
        $highest=1;
        
        for($c=0;$c<strlen($s);$c++){            
            
            for($d=$c+1;$d<strlen($s);$d++){
                
                if(!in_array($s[$d],$r)){

                    $r[]=$s[$c];
                    $r[]=$s[$d];                   
                    
                    $h++;                   
                }else{

                    $h=1;
                    $r=[];
                    $r[]=$s[$d];                   
                } 
                
                if($highest<$h){
                    $highest=$h;
                }                  
               
            }      

           
        }   
        
       
        
        return $highest;
        
    }   
}

$s=new Solution;
// echo $s->lengthOfLongestSubstring("pwwkew"); // 3
echo $s->lengthOfLongestSubstring("aw"); // 3