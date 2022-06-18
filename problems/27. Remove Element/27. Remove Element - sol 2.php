<?php
class Solution {

    /**
    * https://leetcode.com/problems/remove-element/
    * @param Integer[] $nums
    * @param Integer $val
    * @return Integer
    */
    function removeElement(&$nums, $val) {
        $count = 0;
        for($i = 0; $i < count($nums); $i++) {
            if($nums[$i] != $val) {
                $nums[$count] = $nums[$i];
                $count++;
            }
        }

        return $count;
    }
}

$sol = new Solution();
$arr = [2,2,3,1,3];
$k = $sol->removeElement($arr, 3);
var_dump($arr, $k);