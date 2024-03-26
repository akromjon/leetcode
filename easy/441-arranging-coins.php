<?php

/**
 * problem: https://leetcode.com/problems/arranging-coins
 * date: 19.03.2024
 * @param int $n
 * @return int
 */
function arrangeCoins($n)
{

    $counter = 1;

    while ($counter < $n) {

        $n = $n - $counter;

        if ($n > $counter) {
            $counter++;
        }
    }

    return $counter;
}
echo arrangeCoins(100);
// Input: n = 5
// Output: 2
// Explanation: Because the 3rd row is incomplete, we return 2.

// Input: n = 8
// Output: 3
// Explanation: Because the 4th row is incomplete, we return 3.