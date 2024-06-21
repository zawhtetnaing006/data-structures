<?php
/**
 * Core structure of a binary tree
 */
class TreeNode {
    public $value;
    public $left;
    public $right;

    public function __construct($value) {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

/**
 * To implement binary search tree
 */
class BinarySearchTree {
    private $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($value) {
        $newNode = new TreeNode($value);
        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }

    private function insertNode($node, $newNode) {
        if ($newNode->value < $node->value) {
            if ($node->left === null) {
                $node->left = $newNode;
            } else {
                $this->insertNode($node->left, $newNode);
            }
        } else {
            if ($node->right === null) {
                $node->right = $newNode;
            } else {
                $this->insertNode($node->right, $newNode);
            }
        }
    }

    public function search($value) {
        return $this->searchNode($this->root, $value);
    }

    private function searchNode($node, $value) {
        if ($node === null) {
            return false;
        }
        if ($value === $node->value) {
            return true;
        }
        if ($value < $node->value) {
            return $this->searchNode($node->left, $value);
        } else {
            return $this->searchNode($node->right, $value);
        }
    }

    public function inOrderTraversal() {
        $this->inOrder($this->root);
    }

    private function inOrder($node) {
        if ($node !== null) {
            $this->inOrder($node->left);
            echo $node->value . " ";
            $this->inOrder($node->right);
        }
    }
}

// Usage
$bst = new BinarySearchTree();
$bst->insert(50);
$bst->insert(30);
$bst->insert(20);
$bst->insert(40);
$bst->insert(70);
$bst->insert(60);
$bst->insert(80);

echo "In-order traversal: ";
$bst->inOrderTraversal(); // Output: 20 30 40 50 60 70 80

echo "\n";

$searchValue = 40;
echo "\nSearch for $searchValue: " . ($bst->search($searchValue) ? 'Found' : 'Not Found') . "\n"; 

echo "\n";

$searchValue = 90;
echo "Search for $searchValue: " . ($bst->search($searchValue) ? 'Found' : 'Not Found') . "\n";
