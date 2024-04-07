/**
 * @param {number[]} nums
 * @return {boolean}
 */
var containsDuplicate = function(nums) {
    let matches = {}
    for (let i = 0; i < nums.length; i++) {
        if (matches[nums[i]]) {
            return true
        }

        matches[nums[i]] = true
    }

    return false
};
