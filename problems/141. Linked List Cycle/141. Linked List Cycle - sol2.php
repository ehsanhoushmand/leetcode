<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $current = $head;
        $count = 0;
        while($current != null) {
            if($count > 10001) {
                return true;
            }
            $count++;
            $current = $current->next;
        }
        
        return false;
        
    }

    function arrayToListNode ($arr, $pos = -1)
    {
        $end_node = null;
        for($i=0; $i < count($arr); $i++) {
            if(!isset($listNode)) {
                $listNode = new ListNode($arr[$i], null);
                $currentNode = $listNode;
            } else {
                $currentNode->next = new ListNode($arr[$i], null);
                $currentNode = $currentNode->next;
            }
            if($i == $pos) {
                $end_node = $currentNode;
            }
        }
        if(! empty($end_node)) {
            $currentNode->next = $end_node;
        }

        return $listNode;
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

$a = [1,2];
$pos = 0;
$sol = new Solution();
echo($sol->hasCycle($sol->arrayToListNode($a, $pos)));