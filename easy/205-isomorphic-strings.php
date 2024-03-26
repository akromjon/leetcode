<?php

/**
 * @param string $s
 * @param string $t
 * @return bool
 */
function isIsomorphic($s, $t)
{

    $mapS = [];
    $mapT = [];

    for ($i = 0; $i < strlen($s); $i++) {

        if ((array_key_exists($s[$i], $mapS) && $mapS[$s[$i]] !== $t[$i]) || (array_key_exists($t[$i], $mapT) && $mapT[$t[$i]] !== $s[$i])) {
            return false;
        }     

        $mapS[$s[$i]] = $t[$i];
        
        $mapT[$t[$i]] = $s[$i];
    }

    return true;
}

echo (isIsomorphic("aaeaa", "uuxyy") ? "true" : "false") . "\n";
echo (isIsomorphic("egg", "add") ? "true" : "false") . "\n";
echo (isIsomorphic("foo", "baa") ? "true" : "false") . "\n";
echo (isIsomorphic("abc", "dff") ? "true" : "false") . "\n";
