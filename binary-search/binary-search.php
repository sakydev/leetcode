<?php

function search($nums, $target) {
    $start = 0;
    $end = count($nums);

    while ($start <= $end) {
        $middle = floor(($start + $end) / 2);
        if (!isset($nums[$middle])) {
            return -1;
        }

        $current = $nums[$middle];

        if ($current == $target) {
            return $middle;
        }

        if ($target > $current) {
            $start = $middle + 1;
        } elseif ($target < $current) {
            $end = $middle - 1;
        }
    }

    return -1;
}

echo search([2, 4, 6, 8, 10, 12, 14, 16, 18, 20], 16);
// echo search([-1,0,3,5,9,12], 9);
