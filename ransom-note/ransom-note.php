<?php

function canConstruct($ransomNote, $magazine) {
    for ($i = 0; $i < strlen($ransomNote); $i++) {
        if (substr_count($ransomNote, $ransomNote[$i]) <= substr_count($magazine, $ransomNote[$i])) {
            continue;
        }

        return false;
    }

    return true;
}