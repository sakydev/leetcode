let canConstruct = function(ransomNote, magazine) {
    let ransomMap = {}
    for (let i = 0; i < ransomNote.length; i++) {
        let current = ransomNote[i]
        if (current in ransomMap) {
            ransomMap[current]++
        } else {
            ransomMap[current] = 1
        }
    }

    for (let i = 0; i < magazine.length; i++) {
        let current = magazine[i]
        if (current in ransomMap) {
            ransomMap[current]--
            if (ransomMap[current] < 1) {
                delete ransomMap[current]
            }

            if (!Object.keys(ransomMap).length) {
                return true
            }
        }
    }

    return !Object.keys(ransomMap).length
};