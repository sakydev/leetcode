<?php

# https://leetcode.com/problems/group-anagrams
class Solution {

	/**
	 * @param String[] $strs
	 * @return String[][]
	 */
	function groupAnagrams($strs) {
		$done = [];
		foreach ($strs as $str) {
			$chars = count_chars($str, 1);
			$key = implode('_', array_keys($chars)) . '_' . implode('_', array_values($chars));
			$done[$key][] = $str;
		}

		return array_values($done);
	}
}