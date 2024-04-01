<?php

class ListNode
{
    public $val = 0;
    public $next = null;
    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}
$head = null; // Head of the linked list

foreach ([1, 1, 2, 3, 3] as $n) {
    $newListNode = new ListNode($n);

    if ($head === null) {
        $head = $newListNode;
    } else {

        $lastNode = $head;

        while ($lastNode->next !== null) {
            $lastNode = $lastNode->next;
        }

        $lastNode->next = $newListNode;
    }
}


function displayList($head)
{
    $current = $head;

    while ($current->next !== null) {
        $next = $current->next;
        if($current->val===$next->val){
            $temp=$next->next;
            $current->next=$temp;
        }else{
            $current=$next;
        }
    }

    return $head;
}

var_dump(displayList($head));
