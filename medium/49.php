<?php

/**
 * @param string[] $strs
 * @return string[][]
 */
function groupAnagrams($strs)
{
    $result=[];

    foreach($strs as $s){

        $array=str_split($s);

        sort($array);

        $string_from_array=implode("",$array);

        $result[$string_from_array][]=$s;

    }

    return array_values($result);

}

print_r(groupAnagrams(["eat","tea","tan","ate","nat","bat"]));
