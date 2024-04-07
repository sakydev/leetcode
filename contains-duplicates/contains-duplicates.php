<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        // Can be done like below but slightly slower
        // array_unique($nums) != $nums;

        $exists = [];
        for ($i = 0; $i < count($nums); $i++) {
            if (isset($exists[$nums[$i]])) {
                return true;
            }

            $exists[$nums[$i]] = true;
        }

        return false;
    }
}
