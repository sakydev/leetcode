<?php

https://leetcode.com/problems/longest-palindromic-substring/
class Solution {

    public function validate($s) {
        return $s == strrev($s);
    }
    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $i = 0;
        $j = $i + 1;
        $length = strlen($s);
        $longest = 0;
        $longestWord = '';

        if ($s == strrev($s)) { return $s; }
        if ($length <= 2) { return substr($s, 0, 1); }

        $full = false;

        while ($i < $length && $j < $length) {
            $word = substr($s, $i, 1);
            $next = substr($s, $j, 1);

            if (!$full) {
                $full = $word;
                if (!$longestWord) {
                    $longestWord = $full;
                }
            }

            $full .= $next;
            if (($len = strlen($full)) > $longest && $this->validate($full)) {
                $longest = $len;
                $longestWord = $full;
            }

            if ($j + 1 == $length) {
                $i++;
                $j = $i + 1;
                $full = false;
            } else {
                $j++;
            }
        }

        return $longestWord;
    }
}