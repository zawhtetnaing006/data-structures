<?php
/**
 * SplStack is a built-in class that provides the main functionalities of a stack.
 * https://www.php.net/manual/en/class.splstack.php
 */

// Create a new stack
$stack = new SplStack();

$stack->push('first');
$stack->push('second');
$stack->push('thrid');

$stack->rewind();
echo $stack->current();

echo "\n";

$stack->next();
echo $stack->current();

echo "\n";

$stack->next();
echo $stack->current();
