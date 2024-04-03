def canConstruct(ransomNote, magazine):
    ransomMap = {}
    for character in ransomNote:
        if character in ransomMap:
            ransomMap[character] += 1
        else:
            ransomMap[character] = 1

    for character in magazine:
        if character in ransomMap:
            ransomMap[character] -= 1
            if ransomMap[character] < 1:
                del ransomMap[character]

            if not bool(ransomMap):
                return True

    return not bool(ransomMap)