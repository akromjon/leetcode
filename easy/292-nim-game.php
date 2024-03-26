<?php

/**
 * url: https://leetcode.com/problems/nim-game/
 * date: 10.03.2024
 * @param int $n
 * @return bool
 */
function canWinNim($n)
{
   return $n%4!==0;
}
echo canWinNim(4) ? "true" : "false"; // false
echo "\n";
echo canWinNim(1) ? "true" : "false"; // true
echo "\n";
echo canWinNim(8) ? "true" : "false"; // false
echo "\n";
echo canWinNim(9) ? "true" : "false"; // true
echo "\n";




