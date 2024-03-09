<?php

function maxProfit($prices)
{

    $max = 0;

    $min = 0;

    $prices_count = count($prices);

    if ($prices_count > 0) {
        $min = $prices[0];
        $max = 0;

        for ($i = 1; $i < $prices_count; $i++) {
            $p = $prices[$i];

            if ($p < $min) {
                $min = $p;
            }

            // find the highest profit
            if (($p - $min) > $max) {
                $max = $p - $min;
            }
        }
    }
    // echo $min."\n";

    return $max;
}

echo maxProfit([7, 1, 5, 3, 6, 4]);// 5