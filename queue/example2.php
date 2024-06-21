<?php
/**
 * SplDoublyLinkedList is a built-in class that provides the main functionalities of a doubly linked list.
 * https://www.php.net/manual/en/class.spldoublylinkedlist.php
 */

// Create a new doubly linked list
$linked_list = new SplDoublyLinkedList();
$linked_list->push('first');
$linked_list->push('second');
$linked_list->push('thrid');

// Setting iteratormode to SplDoublyLinkedList::IT_MODE_FIFO in SplDoublyLinkedList is the same as Queue
$linked_list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
$linked_list->rewind();
echo $linked_list->current();

echo "\n";

$linked_list->next();
echo $linked_list->current();

echo "\n";

$linked_list->next();
echo $linked_list->current();

