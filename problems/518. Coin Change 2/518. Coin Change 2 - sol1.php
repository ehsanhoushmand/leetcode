<?php
class Solution {

    public $mem;

    /**
     * @param Integer $amount
     * @param Integer[] $coins
     * @return Integer
     */
    function change($amount, $coins) {
        return $this->coinChange($amount, $coins, 0);
    }
    
    function coinChange($amount, $coins, $index) {
        if($amount == 0) return 1;
        $count = 0;
        for($i=$index; $i < count($coins); $i++) {
            if($amount < $coins[$i]) continue;
            $remain = $amount-$coins[$i];
            if(! isset($this->mem[$remain][$i])) {
                $this->mem[$remain][$i] = $this->coinChange($remain, $coins, $i);
            }
            $count += $this->mem[$remain][$i];
        }
        return $count;
    }
}

$sol = new Solution();
echo $sol->change(100, [99, 1]);