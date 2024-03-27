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

class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}


class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */


    public function pushToList(&$head, $data)
    {
        // Create a new node with the given data
        $newNode = new ListNode($data);

        // If the list is empty, set the new node as the head
        if ($head === null) {
            $head = $newNode;
            return;
        }

        // Traverse the list to find the last node
        $lastNode = $head;
        while ($lastNode->next !== null) {
            $lastNode = $lastNode->next;
        }

        // Append the new node to the end of the list
        $lastNode->next = $newNode;
    }

    public function addTwoNumbers($l1, $l2)
    {

        $current1 = $l1;
        
        $current2 = $l2;

        $str1="";
        
        $str2="";
        // Traverse the list and print each node's value
        while ($current1 !== null || $current2 !== null) {

            if ($current1 !== null) {
                $str1=$str1.$current1->val;
                $current1 = $current1->next;
            }

            if ($current2 !== null) {
                $str2=$str2.$current2->val;
                $current2 = $current2->next;
            }
        }        
        
        $sumstr=bcadd($str1,$str2);      

        $head=null;
        
        for($i=strlen($sumstr)-1; $i>=0; $i--){
            $this->pushToList($head,$sumstr[$i]);
        }

        return $head;


    }
}

$s = new Solution;

$l1 = null;

foreach ([2,4,9] as $n) {
    $s->pushToList($l1, $n);
}

$l2 = null;

foreach ([5,6,4,9] as $n) {
    $s->pushToList($l2, $n);
}

var_dump($s->addTwoNumbers($l1 $l2));
