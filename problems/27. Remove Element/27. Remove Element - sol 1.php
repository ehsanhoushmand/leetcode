<?php
class Solution {

    /**
    * https://leetcode.com/problems/remove-element/
    * @param Integer[] $nums
    * @param Integer $val
    * @return Integer
    */
    function removeElement(&$nums, $val) {
        $first = 0;
        $last = count($nums) - 1;
        while($first < $last) {
            if($nums[$first] == $val) {
                while($nums[$last] == $val && $last > $first) {
                    $last--;
                }
                $temp = $nums[$first];
                $nums[$first] = $nums[$last];
                $nums[$last] = $temp;
            }
            $first++;
        }

        return $nums[$last] == $val ? $last : $last+1;
    }
}

$sol = new Solution();
$arr = [2,2,3,1,3];
$k = $sol->removeElement($arr, 3);
var_dump($arr, $k);
