# Data Structures

# Data Structures

- [Linked List](#linked-list)
- [Stack](#stack)
- [Queue](#queue)
- [Binary Search Tree (BST)](#binary-search-tree-bst)

---

## Linked List

### Good
- Keeping linear list of items
- Good performance for inserting/deleting
- They do not require continuous blocks of memory

### Bad
- Poor performance for searching

### Where to use?
- Useful for keeping track of histories

### Structure

#### Linked List
- Value
- Reference (or link) to the next node in the sequence

#### Double Linked List (extension of linked list)
Same as linked list + also keeps track of the previous node in the list:
- Value
- Next reference
- Prev reference

### Examples:
- [Implementation in PHP](linked_list/example.php)

## Stack
A stack is a linear data structure that follows the Last In, First Out (LIFO) principle. This means that the last element added to the stack will be the first one to be removed.

### Good
- Efficient for operations that only require adding or removing elements from the top

### Bad
- Limited access: Only the top element can be accessed directly

### Where to use?
- Function call management ([call stack](https://medium.com/@zawhtetnaing/a-glimpse-into-javascript-magic-event-loop-37babb34b12e))
- Undo mechanisms in text editors

### Examples:
- [Implementation in PHP](stack/example.php)

## Queue
A queue is a linear data structure that follows the First In, First Out (FIFO) principle. This means that the first element added to the queue will be the first one to be removed.

### Good
- Useful for scenarios where elements need to be processed in order

### Bad
- Limited access: Only the front and rear elements can be accessed directly

### Where to use?
- Task scheduling 
- Handling requests in web servers

### Examples:
- [Implementation in PHP](queue/example.php)

## Binary Search Tree (BST)

### Good
- Efficient for search, insertion, and deletion operations (average O(log n) time complexity)

### Bad
- Performance can degrade to O(n) in the worst case if the tree becomes unbalanced

### Where to use?
- Searching and sorting data
- Implementing associative arrays

### Structure
- Node
  - Value
  - Left child (all values are less)
  - Right child (all values are greater)

### Examples:
- [Implementation in PHP](binary_search_tree/example.php)
---