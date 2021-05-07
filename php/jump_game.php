<?php

# https://leetcode.com/problems/jump-game/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $max = 0;
        foreach ($nums as $key => $number) {
            if ($key > $max) {
                return;
            }

            $max = max($key + $number, $max);
        }

        return true;
    }
}
