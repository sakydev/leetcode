<?php

function twoSum($nums, $target) {
    $response = [];
    $map = [];

    foreach ($nums as $index => $number) {
        $difference = $target - $number;
        if (isset($map[$difference])) {
            $response = array_merge($response, [$map[$difference], $index]);
        }

        $map[$number] = $index;
    }

    return $response;
}

print_r(twoSum([2,7,11,15], 9)); // should give 0,1
