<?php
class Solution {

    /**
     * https://leetcode.com/problems/valid-palindrome-ii/
    * @param String $s
    * @return Boolean
    */
    function validPalindrome($s) {
        list($first, $last) = array(0, strlen($s) - 1);
        while($first < $last) {
            if($s[$first] != $s[$last]) {
                return $this->is_palindrome($s, $first, $last - 1) || $this->is_palindrome($s, $first + 1, $last);
            }
            $first++;
            $last--;
        }
        return true;
    }

    function is_palindrome($s, $i, $j) {
        while($i < $j) {
            if($s[$i] != $s[$j]) {
                return false;
            }
            $i++;
            $j--;
        }
        return true;
    }
}


$sol = new Solution();
echo ($sol->validPalindrome('abc') ? 'true' : 'false') . "\n";
