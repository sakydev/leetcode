let search = function(nums, target) {
    let start = 0
    let end = nums.length

    console.log(nums.length)

    while (start <= end) {
        let middle = Math.floor((start + end) / 2)
        let current = nums[middle]
        if (current === target) {
            return middle
        }

        if (target > current) {
            start = middle + 1
        } else if (target < current) {
            end = middle - 1
        }
    }

    return -1
};

console.log(search([-1,0,3,5,9,12], 9))
