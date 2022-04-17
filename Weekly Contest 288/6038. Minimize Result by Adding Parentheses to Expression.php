<?php
// https://leetcode.com/contest/weekly-contest-288/problems/minimize-result-by-adding-parentheses-to-expression/
class Solution {

    /**
     * @param String $expression
     * @return String
     */
    function minimizeResult($expression) {
        $pos = strpos($expression, "+");
        $min = 2147483647;
        $ans = "";
        for($i=0 ; $i < $pos; $i++) {
            for($j=$pos+2; $j<=strlen($expression); $j++) {
                $i_exp = ($i == 0) ? '(' : '*(';
                $j_exp = ($j == strlen($expression)) ? ')' : ')*';
                $new_exp = substr_replace($expression, $i_exp, $i, 0);
                $new_exp = substr_replace($new_exp, $j_exp, $j + strlen($i_exp), 0);
                $result = eval("return {$new_exp};");
                if((int)$result < (int)$min) {
                    $min = $result;
                    $ans = $new_exp;
                }
            }
        }
        
        return str_replace('*', '', $ans);
    }
}


echo (new Solution)->minimizeResult("12+34");