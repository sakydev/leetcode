// https://leetcode.com/problems/can-place-flowers/

/**
 * @param {number[]} flowerbed
 * @param {number} n
 * @return {boolean}
 */
var canPlaceFlowers = function(flowerbed, n) {
    let placed = 0;
    const endPosition = flowerbed.length;
    let lastPlaced = false;

    for (current = 0; current < endPosition; current++) { 
        if (placed == n) {
            return true;
        }

        value = flowerbed[current];
        if (value || lastPlaced) {
            lastPlaced = false;
            continue;
        }

        previous = !current ? value : flowerbed[current - 1];
        nxxt = current == (endPosition - 1) ? value : flowerbed[current + 1];

        if (!previous && !nxxt) {
            placed += 1;
            lastPlaced = true;
        }
    }

    return placed == n;
}

flowerbed = [1,0,0,0,1]
n = 1
x = canPlaceFlowers(flowerbed, n);
console.log(x);