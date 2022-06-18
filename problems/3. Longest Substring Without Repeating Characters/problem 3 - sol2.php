<?php
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $array_of_index = [];
        $current_max_len = 0;
        $ultimate_max_len = 0;
        for($i=0; $i<strlen($s); $i++) {
            $index = $array_of_index[$s[$i]] ?? -1;
            if($i - $index > $current_max_len) {
                $current_max_len++;
            } else {
                $current_max_len = $i - $index;
            }

            $array_of_index[$s[$i]] = $i;
            if($current_max_len > $ultimate_max_len) {
                $ultimate_max_len = $current_max_len;
            }
        }

        return $ultimate_max_len;
    }
}

$sol = new Solution();
echo $sol->lengthOfLongestSubstring('abcadefa');