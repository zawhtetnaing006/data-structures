# Data Structures

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
- Simple and easy to implement
- Efficient for operations that only require adding or removing elements from the top

### Bad
- Limited access: Only the top element can be accessed directly

### Where to use?
- Function call management ([call stack](https://medium.com/@zawhtetnaing/a-glimpse-into-javascript-magic-event-loop-37babb34b12e))
- Undo mechanisms in text editors

### Operations
- Push, Pop, isEmpty

### Examples:
- [Implementation in PHP](stack/example.php)
