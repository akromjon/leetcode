<?php

/**
 * https://leetcode.com/problems/word-pattern/
 * date: 11.03.2024
 * @param string $pattern
 * @param string $s
 * @return bool
 */
function wordPattern($pattern, $s)
{
    

    $list=explode(" ",$s);

    if(strlen($pattern)!==count($list)){
        return false;
    }

    $list2=[];

    $list3=[];

    for($i=0;   $i<strlen($pattern);    $i++){


        if(isset($list2[$pattern[$i]])){
           
            if($list2[$pattern[$i]]!==$list[$i]){
                return false;
            }


        }
        elseif(isset($list3[$list[$i]])){

            if($list3[$list[$i]]!==$pattern[$i]){
                return false;
            }

        }

        $list2[$pattern[$i]]=$list[$i];
        $list3[$list[$i]]=$pattern[$i];

    }

    return true;
}

echo wordPattern("aaaa","dog cat cat dog") ? "true" : "false"; // false
echo "\n";
echo wordPattern("abba","dog cat cat fish") ? "true" : "false"; // false
echo "\n";
echo wordPattern("abba","dog cat cat dog") ? "true" : "false"; // true
echo "\n";


