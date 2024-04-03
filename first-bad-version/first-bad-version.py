import math

class Solution:
    def firstBadVersion(self, n: int) -> int:
        firstBad = 0
        start = 0
        end = n

        while start <= end:
            middle = math.floor((start + end) / 2)
            if isBadVersion(middle): # func provided by leetcode
                firstBad = middle
                end = middle - 1
            else:
                start = middle + 1

        return firstBad
