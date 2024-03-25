<?php

/**
 * problem: https://leetcode.com/problems/climbing-stairs
 * date: 25.03.2024
 * @param int $n
 * @return int
 */
function climbStairs($n)
{
    if ($n == 1) {
        return 1;
    }

    $dp = array_fill(0, $n + 1, 0);
    $dp[1] = 1;
    $dp[2] = 2;


    for ($i = 3; $i <= $n; $i++) {
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }

    return $dp[$n];
}
echo climbStairs(4);
// Example 1:
// Input: n = 2
// Output: 2
// Explanation: There are two ways to climb to the top.
// 1. 1 step + 1 step
// 2. 2 steps

// Example 2:
// Input: n = 3
// Output: 3
// Explanation: There are three ways to climb to the top.
// 1. 1 step + 1 step + 1 step
// 2. 1 step + 2 steps
// 3. 2 steps + 1 step
