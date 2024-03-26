<?php

function isValid($string)
{

    $stack = [];

    $bracketPairs = [
        ')' => '(',
        '}' => '{',
        ']' => '[',
    ];

    for ($i = 0; $i < strlen($string); $i++) {

        $char = $string[$i];

        if (in_array($char, ['(', '{', '['])) {

            $stack[] = $char;

        } 
        
        else if (isset($bracketPairs[$char])) {
           
            if (empty($stack) || array_pop($stack) !== $bracketPairs[$char]) {
                
                return false;
            
            }
        }
    }

    return empty($stack);
}

echo isValid("()[]{}{{}}") ? "true" : "false";
