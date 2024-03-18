<?php

/**
 * url: https://leetcode.com/problems/positions-of-large-groups
 * date: 17.03.2024
 * @param string $s
 * @return int[][]
 */
function largeGroupPositions($s)
{
    $result = [];
    $counter = 0;
    $start = 0;
    $end = 0;

    for ($i = 0; $i < strlen($s); $i++) {

        for ($o = $i + 1; $o < strlen($s); $o++) {

            if ($s[$i] === $s[$o]) {
                ++$counter;
            }

            if ($counter === 1 && $s[$i] === $s[$o]) {
                $start = $i;
            }

            if ($counter > 2 && $s[$i] === $s[$o]) {
                $end = $o;
            }

            if ($s[$i] !== $s[$o]) {
                break;
            }
        }

        if ($counter > 2) {
            $result[] = [$start, $end];
            $counter = 0;
            $start = 0;
            $end = 0;
        }
    }

    return $result;
}
print_r(largeGroupPositions("11222"));
// Example 1:
// Input: s = "abbxxxxzzy"
// Output: [[3,6]]
// Explanation: "xxxx" is the only large group with start index 3 and end index 6.

// Example 2:
// Input: s = "abc"
// Output: []
// Explanation: We have groups "a", "b", and "c", none of which are large groups.

// Example 3:
// Input: s = "abcdddeeeeaabbbcd"
// Output: [[3,5],[6,9],[12,14]]
// Explanation: The large groups are "ddd", "eeee", and "bbb".
