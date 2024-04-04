from typing import List

class Solution:
    def groupAnagrams(self, strs: List[str]) -> List[List[str]]:
        mapped = {}

        for word in strs:
            arranged = ''.join(sorted(word))
            if arranged in mapped:
                mapped[arranged].append(word)
            else:
                mapped[arranged] = [word]

        return list(mapped.values())