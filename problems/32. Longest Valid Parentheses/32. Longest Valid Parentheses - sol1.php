<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses($s) {
        $stack = array(); 
        $max = 0;
        array_push($stack, -1);
        for($i = 0; $i < strlen($s); $i++) {
            if($s[$i] == '(') {
                array_push($stack, $i);
            } else {
                $lastIndex = array_pop($stack);
                $secondIndex = array_pop($stack);
                if(! isset($lastIndex) || ! isset($secondIndex)) {
                    array_push($stack, $i);
                } else {
                    $max = max($max, $i - $secondIndex);
                    array_push($stack, $secondIndex);
                }
            }
        }

        return $max;
    }
}

$sol = new Solution();

echo $sol->longestValidParentheses('');