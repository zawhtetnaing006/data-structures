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

echo "The linked list contains: \n";
for ($linked_list->rewind(); $linked_list->valid(); $linked_list->next()) {
    echo $linked_list->current() . " ";
}
echo "\n";

// Insert an element at the beginning
$linked_list->unshift('Hello,');

echo "After inserting at the beginning: \n";
for ($linked_list->rewind(); $linked_list->valid(); $linked_list->next()) {
    echo $linked_list->current() . " ";
}
echo "\n"; 

// Remove the first element
$linked_list->shift();

echo "After removing the first element: \n";
for ($linked_list->rewind(); $linked_list->valid(); $linked_list->next()) {
    echo $linked_list->current() . " ";
}
echo "\n";

// Remove the last element
$linked_list->pop();

// Print the updated list
echo "After removing the last element: \n";
for ($linked_list->rewind(); $linked_list->valid(); $linked_list->next()) {
    echo $linked_list->current() . " ";
}
echo "\n"; 

// Search and delete a specific element
$search = 'for';
for ($linked_list->rewind(); $linked_list->valid(); $linked_list->next()) {
    if ($linked_list->current() == $search) {
        $linked_list->offsetUnset($linked_list->key());
        break;
    }
}

echo "After deleting the element 'for': \n";
for ($linked_list->rewind(); $linked_list->valid(); $linked_list->next()) {
    echo $linked_list->current() . " ";
}
echo "\n"; // Output: thanks
?>
