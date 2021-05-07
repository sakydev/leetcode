<?php

# https://leetcode.com/explore/interview/card/top-interview-questions-medium/103/array-and-strings/776/
class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer[][]
   */
  function threeSum($nums) {
    $matches = array();
    $total = count($nums);
    $target = 0;

    sort($nums);
    for ($i=0; $i < $total - 2; $i++) { 
    	$number = $nums[$i];
    	if ($number > 0) { break; }
    	$left = $i + 1;
    	$right = $total - 1;

    	while ($left < $right) {
    		$leftNumber = $nums[$left];
    		$rightNumber = $nums[$right];
    		$sum = $number + $leftNumber + $rightNumber;
    		if ($sum == $target) {
    			$current = array($number, $leftNumber, $rightNumber);
    			$matches[implode('_', $current)] = $current;
    			$left += 1;
    		} elseif ($sum < $target) {
    			$left += 1;
    		} else {
    			$right -= 1;
    		}
    	}
    }

    return $matches;
  }
}

