<?php

/**
 * @param ListNode $list1
 * @param ListNode $list2
 * @return ListNode
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

function pushToList(&$head, $data)
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

$l1 = null;
foreach ([1, 2, 4] as $n) {
    pushToList($l1, $n);
}
$l2 = null;
foreach ([3, 4, 5] as $n) {
    pushToList($l2, $n);
}

function mergeTwoLists($list1, $list2)
{
    $current = $list1;

    $current2 = $list2;

    $newList = null;

    while ($current !== null || $current2 !== null) {

        if ($current !== null && $current2 !== null) {

            if ($current->val >= $current2->val) {
                foreach ([$current->val, $current2->val] as $c) {
                    pushToList($newList, $c);
                }
            }
            else{
                foreach ([$current2->val, $current->val] as $c) {
                    pushToList($newList, $c);
                }
            }

           

            $current = $current->next;
        }

        if ($current2 !== null) {            

            $current2 = $current2->next;
        }
    }

    var_dump($newList);
}

mergeTwoLists($l1, $l2);

// Example 1:
// Input: list1 = [1,2,4], list2 = [1,3,4]
// Output: [1,1,2,3,4,4]

// Example 2:
// Input: list1 = [], list2 = []
// Output: []

// Example 3:
// Input: list1 = [], list2 = [0]
// Output: [0]
