<?php
/**
 * This is a solution class.
 */
class Solution {
    /**
     * Detects the capital usage in a word.
     *
     * @param string $word  The word to check.
     * @return bool True if the capital usage is correct, false otherwise.
     */
    function detectCapitalUse($word) {
        // Case 1: All letters are capitals
        if (ctype_upper($word)) {
            return true;
        }
        
        // Case 2: All letters are not capitals
        if (ctype_lower($word)) {
            return true;
        }
        
        // Case 3: Only the first letter is capital
        if (ctype_upper($word[0]) && ctype_lower(substr($word, 1))) {
            return true;
        }
        
        // If none of the above cases are true, return false
        return false;
    }
}
