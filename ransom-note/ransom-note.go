package main

import (
	"strings"
)

func ransomNote(ransomNote, magazine string) bool {
	ransomNoteMap := make(map[string]int)
	ransomNoteCrumbs := strings.Split(ransomNote, "")
	magazineCrumbs := strings.Split(magazine, "")

	for _, char := range ransomNoteCrumbs {
		_, exists := ransomNoteMap[char]
		if exists {
			ransomNoteMap[char] += 1
		} else {
			ransomNoteMap[char] = 1
		}
	}

	for _, char := range magazineCrumbs {
		if ransomNoteMap[char] > 0 {
			ransomNoteMap[char]--

			if ransomNoteMap[char] < 1 {
				delete(ransomNoteMap, char)
			}
		}
	}

	return len(ransomNoteMap) == 0
}
