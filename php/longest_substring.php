<?php

# https://leetcode.com/problems/longest-substring-without-repeating-characters/
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
    	$max = 0;
    	$words = str_split($s);
    	$length = count($words);

    	$current = '';
    	for ($i=0; $i < $length; $i++) {
			if (($len = strlen($current)) > $max) {
				$max = $len;
			}

    		$current = $words[$i];

    		for ($key=$i + 1; $key < $length; $key++) {
    			$next = $words[$key];
    			if (strstr($current, $next)) {
    				break;
    			}

    			$current .= $next;
    		}
    	}

    	return $max ? $max : strlen($current);
    }
}