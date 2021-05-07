<?php

# https://leetcode.com/problems/majority-element/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
			$values = array_count_values($nums);
			$max = max($values);
			$key = current(array_keys($values, $max));

			if ((count($nums) / 2) < $max) {
				return $key;
			}
    }
}