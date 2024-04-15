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

$head = new ListNode(1);
$head->next = new ListNode(2);
// $head->next->next = new ListNode(3);




/**
 * @param ListNode $head
 * @param Integer $n
 * @return ListNode
 */
function removeNthFromEnd($head, $n)
{
    if($head->next===null){
        return new ListNode(null);
    }
    
    displayBackwards($head,$n);

    return $head;
}

function displayBackwards(&$head,&$n)
{
    if ($head === null) { 
        return $head;
    }   

    if($n===1){
        $head->next=$head->next->next;
    }
    
    $n--;

    displayBackwards($head->next,$n);

    $head->val;
}

var_dump((removeNthFromEnd($head,1)));
