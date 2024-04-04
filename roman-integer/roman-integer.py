class Solution:
    def romanToInt(self, s: str) -> int:
        romanMap = {'I': 1, 'V': 5, 'X': 10, 'L': 50, 'C': 100, 'D': 500, 'M': 1000}

        iterations = len(s) - 1
        total = romanMap[s[iterations]]

        for i in range(iterations):
            if romanMap[s[i + 1]] > romanMap[s[i]]:
                total -= romanMap[s[i]]
            else:
                total += romanMap[s[i]]

        return total
