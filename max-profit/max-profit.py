def maxProfit(prices):
    profit = 0
    buy = prices[0]

    for price in prices:
        if price < buy:
            buy = price
        elif price - buy > profit:
            profit = price - buy

    return profit