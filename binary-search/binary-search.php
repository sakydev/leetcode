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