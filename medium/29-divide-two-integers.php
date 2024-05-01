<?php

/**
 * @param Integer $dividend
 * @param Integer $divisor
 * @return Integer
 */
function divide($dividend, $divisor)
{
    // Handle edge cases
    if ($divisor == 0) {
        return "Error: Division by zero";
    }

    if ($dividend == 0) {
        return 0;
    }

    // Handle overflow cases
    if ($dividend == PHP_INT_MIN && $divisor == -1) {
        return PHP_INT_MAX;
    }

    // Determine the signs of dividend and divisor
    $negative_result = ($dividend < 0) != ($divisor < 0);

    // Convert both dividend and divisor to positive
    $dividend = abs($dividend);
    $divisor = abs($divisor);

    $quotient = 0;

    // Repeatedly subtract divisor from dividend until dividend becomes smaller than divisor
    while ($dividend >= $divisor) {
        $temp_divisor = $divisor;
        $multiple = 1;
        while (($temp_divisor << 1) <= $dividend) {
            $temp_divisor <<= 1;
            $multiple <<= 1;
        }
        $dividend -= $temp_divisor;
        $quotient += $multiple;
    }

    // Apply the sign to the result
    if ($negative_result) {
        $quotient = -$quotient;
    }
    if($quotient>pow(2,31)-1){
        return pow(2,31)-1;
    }

    return $quotient;
}
echo divide(-2147483648,-1);