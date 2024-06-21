<?php
/**
 * SplDoublyLinkedList is a built-in class that provides the main functionalities of a doubly linked list.
 * https://www.php.net/manual/en/class.spldoublylinkedlist.php
 */

// Create a new doubly linked list
$linked_list = new SplDoublyLinkedList();

// Add elements to the list
$linked_list->push('thanks'); 
$linked_list->push('for'); 
$linked_list->push('reading');

echo "\nCheck current element\n";
$linked_list->rewind(); // Go to the start of the list
echo $linked_list->current(); //check current element

echo "\n";

echo "\nMove to next element\n";
$linked_list->next(); //move to next element
echo $linked_list->current(); // check current element 

echo "\n";

echo "\nMove to prev element\n";
$linked_list->prev(); //move to prev element
echo $linked_list->current(); // check current element 

echo "\n";

//looping the list
echo "\nlooping the list\n";
for($linked_list->rewind();$linked_list->valid();$linked_list->next()) {
    echo $linked_list->current();
    echo "\n";
}