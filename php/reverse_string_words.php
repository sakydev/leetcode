<?php

// https://leetcode.com/problems/reverse-words-in-a-string
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $crumbs = explode(' ', $s);
        $crumbs = array_reverse($crumbs);
        $new_list = [];

        foreach ($crumbs as $key => $value) {
            if ($value != '') {
                $new_list[] = $value;
            }
        }

        return implode(' ', $new_list);
    }
}