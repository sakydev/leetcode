let isPalindrome = function(s) {
    let alphanumeric = s.toLowerCase().replace(/[^a-z0-9]/gi, '')

    let reversed = alphanumeric.split('').reverse().join('')

    return alphanumeric === reversed
};