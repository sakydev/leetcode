def maxProfit(prices):
    profit = 0
    buy = prices[0]

    for price in prices:
        if price < buy:
            buy = price
        elif price - buy > profit:
            profit = price - buy
    return profit


    return profit

print(maxProfit([7,1,5,3,6,4]))
