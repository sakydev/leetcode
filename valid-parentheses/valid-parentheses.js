let isValid = function(s) {
    const endToStart = {')': '(', ']': '[', '}': '{'}
    let stack = []

    const crumbs = s.split('')
    for (let i = 0; i < crumbs.length; i++) {
        let current = crumbs[i]
        if (stack.length && current in endToStart) {
            if (stack[stack.length - 1] === endToStart[current]) {
                stack.pop()

                continue
            }

            return false
        }

        stack.push(current)
    }

    return !stack.length
};