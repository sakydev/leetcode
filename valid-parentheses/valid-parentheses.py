def isValid(s):
    endToStart = {')': '(', ']': '[', '}': '{'}
    stack = []

    for current in s:
        if current in endToStart:
            if stack and stack[-1] == endToStart[current]:
                stack.pop()

                continue

            return False

        stack.append(current)

    return len(stack) < 1