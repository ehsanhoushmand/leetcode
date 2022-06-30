<?php
class Solution {

    public $array;
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
        if($index >= count($coins)) return 0;
        $count = 0;
        for($remain = $amount; $remain >= 0;){
            if(! isset($this->array[$remain][$index+1])) {
                $this->array[$remain][$index+1] = $this->coinChange($remain, $coins, $index+1);
            }
            $count +=  $this->array[$remain][$index+1];
            $remain -= $coins[$index];
        }
        return $count;
    }
}

$sol = new Solution();
echo $sol->change(500, [3,5,7,8,9,10,11]);