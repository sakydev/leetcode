<?php

function isPalindrome($s) {
    $palindrome = strtolower(preg_replace('/[^a-z0-9]/i', '', $s));

    return $palindrome === strrev($palindrome);
}
