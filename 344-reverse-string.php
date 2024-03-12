<?php

/**
 * url: https://leetcode.com/problems/reverse-string/
 * date: 12.03.2024
 * @param string[] $s
 * @return NULL
 */
function reverseString(&$s)
{
    $list = [];

    for ($a = count($s)-1; $a >= 0; $a--) {
        $list[]=$s[$a];
        unset($s[$a]);
    }

    $s=$list;
}

$a=["h", "e", "l", "l", "o"];
$b=&$a;

reverseString($b);

print_r($b);
