package main

import (
	"math"
)

func search(nums []int, target int) int {
	start := 0
	end := len(nums) - 1

	for start <= end {
		middle := int(math.Floor(float64(start+end) / 2))
		current := nums[middle]

		if current == target {
			return middle
		}

		if target > current {
			start = middle + 1
		} else {
			end = middle - 1
		}
	}

	return -1
}
