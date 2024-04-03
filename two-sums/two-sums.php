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