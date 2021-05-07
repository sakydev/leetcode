<?php

# https://leetcode.com/explore/interview/card/top-interview-questions-easy/92/array/549/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $list = array_count_values($nums);
        foreach ($list as $number => $occurances) {
            if ($occurances < 2) {
                return $number;
            }
        }
    }
}