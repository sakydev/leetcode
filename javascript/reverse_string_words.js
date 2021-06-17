// https://leetcode.com/problems/reverse-words-in-a-string

/**
 * @param {string} s
 * @return {string}
 */
var reverseWords = function(s) {
    crumbs = s.split(' ')
    crumbs.reverse()
    
    newList = []
    for (var i = crumbs.length - 1; i >= 0; i--) {
        if (crumbs[i] != '') {
            newList.push(crumbs[i]);
        }
    }
    
    return newList.reverse().join(' ');   
};

val = "the sky is blue"
val = "  hello world  "
val = "  Bob    Loves  Alice   "

out = reverseWords(val);
console.log(out);