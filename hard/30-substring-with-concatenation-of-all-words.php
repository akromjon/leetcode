<?php

/**
 * problem: https://leetcode.com/problems/substring-with-concatenation-of-all-words/
 * date: 14.04.2024
 * @param string $s
 * @param string[] $words
 * @return int[]
 */
function findSubstring($s, $words)
{
    $wordLength = strlen($words[0]);
    $totalWordsLength = count($words) * $wordLength;
    $lengthOfS = strlen($s);
    $lastLine = 0;
    $results = [];
    
    // Preprocessing to count occurrences of each word
    $wordCounts = [];
    foreach ($words as $word) {
        if (!isset($wordCounts[$word])) {
            $wordCounts[$word] = 1;
        } else {
            $wordCounts[$word]++;
        }
    }

    print_r($wordCounts);

    while (true) {
        $end = $lastLine + $totalWordsLength;

        if ($end > $lengthOfS) {
            break;
        }

        $word = substr($s, $lastLine, $totalWordsLength);

        $wordIndex = 0;
        $valid = true;

        while ($wordIndex < $totalWordsLength) {
            $subWord = substr($word, $wordIndex, $wordLength);

            if (!isset($wordCounts[$subWord]) || $wordCounts[$subWord] === 0) {
                $valid = false;
                break;
            } else {
                $wordCounts[$subWord]--;
            }

            $wordIndex += $wordLength;
        }

        if ($valid) {
            $results[] = $lastLine;
        }

        // Reset word counts for next iteration
        foreach ($words as $word) {
            $wordCounts[$word]++;
        }

        $lastLine++;
    }

    return $results;

    
}
print_r(findSubstring("lingmindraboofooowingdingbarrwingmonkeypoundcake", ["fooo","barr","wing","ding","wing"]));
// Example 1:
// Input: s = "barfoothefoobarman", words = ["foo","bar"]
// Output: [0,9]
// Explanation:
// The substring starting at 0 is "barfoo". It is the concatenation of ["bar","foo"] which is a permutation of words.
// The substring starting at 9 is "foobar". It is the concatenation of ["foo","bar"] which is a permutation of words.
// The output order does not matter. Returning [9,0] is fine too.

// Example 2:
// Input: s = "wordgoodgoodgoodbestword", words = ["word","good","best","word"]
// Output: []
// Explanation:
// There is no concatenated substring.

// Example 3:
// Input: s = "barfoofoobarthefoobarman", words = ["bar","foo","the"]
// Output: [6,9,12]
// Explanation:
// The substring starting at 6 is "foobarthe". It is the concatenation of ["foo","bar","the"].
// The substring starting at 9 is "barthefoo". It is the concatenation of ["bar","the","foo"].
// The substring starting at 12 is "thefoobar". It is the concatenation of ["the","foo","bar"].
