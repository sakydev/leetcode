<?php

# https://leetcode.com/problems/can-place-flowers/
class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        $placed = 0;
        $end_position = count($flowerbed);
        $last_placed = False;
        for ($current = 0; $current < $end_position; $current++) { 
            if ($placed == $n) {
                return True;
            }

            $value = $flowerbed[$current];
            if ($value || $last_placed) {
                $last_placed = False;
                continue;
            }

            $previous = !$current ? $value : $flowerbed[$current - 1];
            $nxxt = $current == ($end_position - 1) ? $value : $flowerbed[$current + 1];

            if (!$previous && !$nxxt) {
                $placed += 1;
                $last_placed = True;
            }
        }

        return $placed == $n;
    }
}