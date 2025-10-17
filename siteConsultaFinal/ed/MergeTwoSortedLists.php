<?php
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return true
     */
    function mergeTwoLists($list1, $list2) {
        $sorted = array_merge((array)$list1, (array)$list2);
        $sorted = sort($sorted);
        return $sorted;
    }
}