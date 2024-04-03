def twoSum(numbers, target):
    response: List[int] = []
    map = {}

    for index, number in enumerate(numbers):
        difference = target - number
        if difference in map:
            response.append(index)
            response.append(map[difference])
            continue

        map[number] = index

    return response