# https://leetcode.com/problems/can-place-flowers/

class Solution:
    # if previous not found but next is 0 == placed
    # if next is not found but previous is 0 == placed
    # if previous and next is 0 == placed
    def canPlaceFlowers(self, flowerbed, n):
        placed = 0
        end_position = len(flowerbed)
        last_placed = False
        for current in range(end_position):
            if placed == n:
                return True
            
            value = flowerbed[current]
            if value == 1 or last_placed:
                last_placed = False
                continue

            previous = value if current < 1 else flowerbed[current - 1]
            nxxt = value if current == (end_position - 1) else flowerbed[current + 1]

            if (previous == 0 and nxxt == 0):
                placed += 1
                last_placed = True

        return placed == n