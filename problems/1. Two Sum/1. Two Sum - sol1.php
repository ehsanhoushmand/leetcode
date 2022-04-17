<?php

class Solution {
    /**
     * https://leetcode.com/problems/two-sum/
     * @param int[] $nums
     * @param int $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i= 0; $i < count($nums); $i++) {
            for($j= $i+1; $j< count($nums); $j++) {
                if($nums[$i] + $nums[$j] == $target)
                    return [$i,$j];
            }
        }
    }


}

print_r((new Solution)->twoSum([2,7,11,15], 9));