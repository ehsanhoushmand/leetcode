<?php
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $max = 0;
        for($i=0; $i < strlen($s); $i++) {
            $ans = 1;
            for($j=$i+1; $j < strlen($s); $j++) {
                $sub = substr($s,$i,$j-$i);
                if(strpos($sub, $s[$j]) === false) {
                    $ans = $j-$i+1;
                } else {
                    break;
                }
            }
            $max = ($max > $ans) ? $max : $ans;
        }
        return $max;
    }
}

$sol = new Solution();
echo $sol->lengthOfLongestSubstring('bbebbdbbbsabaec');