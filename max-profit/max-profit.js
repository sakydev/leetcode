let maxProfit = function(prices) {
    let buy = prices[0]
    let profit = 0

    for (let i = 0; i < prices.length; i++) {
        let price = prices[i]
        if (price < buy) {
            buy = price
        } else if (price - buy > profit) {
            profit = price - buy
        }
    }

    return profit
};

console.log(maxProfit([7,1,5,3,6,4]))
