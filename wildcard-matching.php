<?php


/**
 * @param string $s
 * @param string $p
 * @return bool
 */
function isMatch($s, $p)
{
    if($p=="*") return true;
    
    $str="";
    
    for($a=0; $a<strlen($p);$a++){
        
        if($p[$a]==$s[$a] || $p[$a]=="?"){
            $str.=$s[$a];
        }
    }

    return strlen($str)==strlen($s) ? true : false;
}
//
$s = "adceb"; $p = "*a*b";
echo isMatch($s,$p) ? "true" : "false"; // true
