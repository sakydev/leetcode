# https://leetcode.com/problems/reverse-words-in-a-string

class Solution:
    def reverseWords(self, s):
        crumbs = s.split(' ')
        crumbs.reverse()
        new_list = []
        for item in crumbs:
            if item != '':
                new_list.append(item)

        return ' '.join(new_list)