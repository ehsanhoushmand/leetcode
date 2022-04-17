<?php

/**
 * https://leetcode.com/problems/add-two-numbers/
 * 
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $sum = $this->sumLargeNumber($this->listNodeToArray($l1), $this->listNodeToArray($l2));

        return $this->arrayToListNode($sum);

    }

    function length ($l)
    {
        $count = 0;
        while($l) {
            $count++;
            $l = $l->next;
        }

        return $count;
    }

    function listNodeToArray($listNode)
    {
        $arr = [];
        for($i = 0 ; $i < $this->length($listNode); $i++) {
            $item = isset($item) ? $item->next : $listNode;
            array_push($arr, $item->val);
        }

        return $arr;
    }

    function arrayToListNode ($arr)
    {
        for($i=0; $i < count($arr); $i++) {
            if(!isset($listNode)) {
                $listNode = new ListNode($arr[$i], null);
                $currentNode = $listNode;
            } else {
                $currentNode->next = new ListNode($arr[$i], null);
                $currentNode = $currentNode->next;
            }
        }

        return $listNode;
    }

    function sumLargeNumber ($arr1, $arr2)
    {
        $max = max(count($arr1), count($arr2));
        $sumArr = [];
        $fraction = 0;
        for($i=0; $i<$max; $i++) {
            $sum = ((int)($arr1[$i] ?? 0)) + ((int)($arr2[$i] ?? 0)) + $fraction;
            if($sum >= 10) {
                $sumArr[$i] = end(str_split($sum));
                $fraction = 1;
            } else {
                $sumArr[$i] = $sum;
                $fraction = 0;
            }
        }
        if($fraction == 1) {
            array_push($sumArr, 1);
        }

        return $sumArr;
    }
}

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}


$a = [1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1];
$b = [5,6,4];
$sol = new Solution();
$list = $sol->addTwoNumbers($sol->arrayToListNode($a), $sol->arrayToListNode($b));

print_r($sol->listNodeToArray($list));


