package main

import (
	"fmt"
	"math"
)

func main() {
	nums := []int{-1, 0, 3, 5, 9, 12}
	fmt.Println(search(nums, 9))
}

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
