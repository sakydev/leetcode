<?php

function romanToInt($s) {
    $romanMap = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];

    $iterations = strlen($s) - 1;
    $total = $romanMap[$s[$iterations]];

    for ($i = 0; $i < $iterations; $i++) {
        $current = $romanMap[$s[$i]];
        if ($romanMap[$s[$i + 1]] > $current) {
            $total -= $current;
        } else {
            $total += $current;
        }
    }

    return $total;
}
