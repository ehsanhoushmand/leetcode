<?php
/**
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
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $first_pointer = new ListNode(null);
        $array = [];
        foreach($lists as $list) {
            while ($list) {
                $array[] = $list->val;
                $list = $list->next;
            }
        }
        sort($array);
        if(isset($array[0])) {
            $first_pointer->val = $array[0];
        }
        $cp = $first_pointer;
        for($i= 1; $i < count($array) ; $i++) {
            $tmp = new ListNode($array[$i]);
            $cp->next = $tmp;
            $cp = $tmp;
        }
        
        return $first_pointer;
        
    }
}