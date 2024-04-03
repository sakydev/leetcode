import math

def search(nums, target):
    start = 0
    end = len(nums) - 1

    while (start <= end):
        middle = math.floor((start + end) / 2)

        if nums[middle] == target:
            return middle

        if target > nums[middle]:
            start = middle + 1
        else:
            end = middle - 1

    return -1