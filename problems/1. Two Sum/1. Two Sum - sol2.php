<?php

class Solution {
    /**
     * https://leetcode.com/problems/two-sum/
     * 
     * @param int[] $nums
     * @param int $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arr = [];
        for($i= 0; $i < count($nums); $i++) {
            if(isset($arr[$target-$nums[$i]])) {
                return [$i, $arr[$target-$nums[$i]]];
            }
            $arr[$nums[$i]] = $i;
        }
    }
}

print_r((new Solution)->twoSum([2,7,11,15], 9));