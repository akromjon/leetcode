<?php

/**
 * https://leetcode.com/problems/reverse-words-in-a-string/
 * date: 12.03.2024
 * @param string $s
 * @return string
 */
function reverseWords($s)
{
    $word="";

    $sword="";

    $addspace=false;

    for($i=strlen($s)-1; $i>=0; $i--){        
        
        if($s[$i]!==" "){

            $addspace=true;

            $sword=$s[$i].$sword;

        }
        
        if($s[$i]==" " || $i===0){  
            
            if($addspace){
                
                $word=$word.$sword." "; 
                
                $addspace=false;

            }else{
                $word=$word.$sword; 
            }

            $sword="";
        }
        
    }
    
    return rtrim($word," ");
}
$s = "a good example";
echo strlen($s)."\n";
echo strlen(reverseWords($s))."\n";
