<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        [$max, $left, $right] = array(0, 0, count($height) - 1);
        while($left < $right) {
            $max = max($max, min($height[$left], $height[$right]) * ($right - $left));
            if($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        return $max;
    }
}