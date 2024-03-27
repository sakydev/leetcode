<?php

function isValid($s) {
    $endToStart = [')' => '(', ']' => '[', '}' => '{'];
    $stack = [];

    for ($i = 0; $i < strlen($s); $i++) {
        $current = $s[$i];
        if (isset($endToStart[$current])) {
            if (end($stack) === $endToStart[$current]) {
                array_pop($stack);

                continue;
            }

            return false;
        }

        $stack[] = $current;
    }

    return empty($stack);
}

var_dump(isValid('()[]{}'));
