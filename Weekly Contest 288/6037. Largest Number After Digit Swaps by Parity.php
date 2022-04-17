<?php
// https://leetcode.com/contest/weekly-contest-288/problems/largest-number-after-digit-swaps-by-parity/
class Solution {

    /**
    * @param Integer $num
    * @return Integer
    */
    function largestInteger($num) {
        $str = str_split((string) $num);
        $pos = array_fill(0, strlen((string) $num), 0);
        $ans = '';
        foreach($str as $key => $value) {
            $max = -1;
            $max_pos = -1;
            for($j = 0; $j < strlen((string)$num); $j++) {
                if($value%2 == $str[$j] % 2 && $str[$j] > $max && $pos[$j] == 0) {
                    $max = $str[$j];
                    $max_pos = $j;
                }
            }
            $pos[$max_pos] = 1;
            $ans .= $max;
        }

        return (int)$ans;
    }
}


echo (new Solution)->largestInteger(1234);
