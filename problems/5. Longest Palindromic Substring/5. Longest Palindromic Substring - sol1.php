<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $max = 1;
        $answer = $s[0];
        for($i = 0; $i< strlen($s) - 1; $i++) {
            $ans = $this->oddPalindrome($s, $i);
            $len = $ans['last'] - $ans['first'] + 1;
            if($len > $max) {
                $max = $len;
                $answer = substr($s, $ans['first'], $len);
            }
            if($s[$i] == $s[$i+1]) {
                $ans = $this->evenPalindrome($s, $i, $i+1);
                $len = $ans['last'] - $ans['first'] + 1;
                if($len > $max) {
                    $max = $len;
                    $answer = substr($s, $ans['first'], $len);
                }
            }
        }
        
        return $answer;
    }
    function oddPalindrome($s, $index) {
        $first = $index - 1;
        $last = $index + 1;
        while($first >= 0 && $last < strlen($s)) {
            if($s[$first] != $s[$last]) break;
            $first--;
            $last++;
        }
        return ['first' => $first+1, 'last' => $last-1];
    }
    
    function evenPalindrome($s, $first, $last) {
        while($first >= 0 && $last < strlen($s)) {
            if($s[$first] != $s[$last]) break;
            $first--;
            $last++;
        }
        return ['first' => $first+1, 'last' => $last-1];
    }
}