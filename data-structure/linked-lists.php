<?php
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class ListNode {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    public function isEmpty() {
        return $this->head === null;
    }

    public function insert($data) {
        $newNode = new Node($data);

        if ($this->isEmpty()) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function display() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
}

// Usage example:
$list = new ListNode();
$list->insert(10);
$list->insert(20);
$list->insert(30);
$list->insert(40);
$list->display();  // Output: 10 20 30