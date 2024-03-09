<?php

function intToRoman($num)
{
    $roman = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    
}

echo intToRoman(3) . "\n"; // III
echo intToRoman(58) . "\n"; // LVIII
echo intToRoman(1994) . "\n"; // MCMXCIV