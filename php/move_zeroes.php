<?php

# https://leetcode.com/problems/move-zeroes/
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $total = count($nums);
        for ($i=0; $i < $total; $i++) { 
            if ($nums[$i] === 0) {
                unset($nums[$i]);
                $nums[] = 0;
            }
        }

        return $nums;
    }
}