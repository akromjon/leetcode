<?php

/**
 * @param int[][] $image
 * @return int[][]
 */
function flipAndInvertImage($image)
{



    for ($i = 0; $i < count($image); $i++) {

        $temp = $image[$i];

        for ($j = 0; $j < count($temp); $j++) {
            if ($temp[$j]) {
                $temp[$j] = 0;
            } else {
                $temp[$j] = 1;
            }
        }

        if($temp[count($temp)-1]){
            $temp[count($temp)-1]=0;
            $temp[0]=1;
        }

        $image[$i] = $temp;
    }

    return $image;
}
print_r(flipAndInvertImage([[1,1,0],[1,0,1],[0,0,0]]));

// Example 1:
// Input: image = [[1,1,0],[1,0,1],[0,0,0]]
// Output: [[1,0,0],[0,1,0],[1,1,1]]
// Explanation: First reverse each row: [[0,1,1],[1,0,1],[0,0,0]].
// Then, invert the image: [[1,0,0],[0,1,0],[1,1,1]]

// Example 2:
// Input: image = [[1,1,0,0],[1,0,0,1],[0,1,1,1],[1,0,1,0]]
// Output: [[1,1,0,0],[0,1,1,0],[0,0,0,1],[1,0,1,0]]
// Explanation: First reverse each row: [[0,0,1,1],[1,0,0,1],[1,1,1,0],[0,1,0,1]].
// Then invert the image: [[1,1,0,0],[0,1,1,0],[0,0,0,1],[1,0,1,0]]
