from typing import List


class Solution:
    def containsDuplicate(self, nums: List[int]) -> bool:
        processed = {}
        for number in nums:
            if number in processed:
                return True

            processed[number] = True

        return False


x = Solution()
print(x.containsDuplicate([1,2,3,1])) # True