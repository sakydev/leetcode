function twoSum(numbers, target) {
    const response = []
    const map = {}

    for (i = 0; i < numbers.length; i++) {
        let number = numbers[i]
        let difference = target - number

        if (map.hasOwnProperty(difference)) {
            response.push(i, map[difference])
            break
        }

        map[number] = i
    }

    return response
}