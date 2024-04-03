package main

func maxProfit(prices []int) int {
	profit := 0
	buy := prices[0]

	for i := 1; i < len(prices); i++ {
		current := prices[i]

		if current < buy {
			buy = current
			continue
		}

		potentialProfit := current - buy
		if potentialProfit > profit {
			profit = potentialProfit
		}
	}

	return profit
}
