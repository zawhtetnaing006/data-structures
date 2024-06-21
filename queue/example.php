<?php
/**
 * SplQueue is a built-in class that provides the main functionalities of a queue.
 * https://www.php.net/manual/en/class.splqueue.php
 */

// Create a new queue
$queue = new SplQueue();

// Enqueue elements
$queue->enqueue('first');
$queue->enqueue('second');
$queue->enqueue('third');

$queue->rewind();
echo $queue->current();

echo "\n";

$queue->next();
echo $queue->current();

echo "\n";

$queue->next();
echo $queue->current();