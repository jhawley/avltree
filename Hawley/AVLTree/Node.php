<?php

namespace Hawley\AVLTree;

abstract class Node implements INode {
    protected $height, $left, $right, $value;
    
    public function __construct($value) {
        $this->value = $value;
        $this->left = new self(null);
        $this->right = new self(null);
    }
    
    public function insert($value) {
        if($this->isEmpty()) {
            $this->setValue($value);
            return;
        }
        
        $comparison = $this->compare($value);
        if($comparison === 1) {
            
        } else if($comparison === -1) {
            
        }
    }
    
    public function getHeight() {
        return $this->height;
    }
    
    public function getLeft() {
        return $this->left;
    }
    
    public function getRight() {
        return $this->right;
    }
    
    public function getValue() {
        return $this->value;
    }
    
    public function setValue($value) {
        $this->value = $value;
    }
    
    public function isEmpty() {
        return is_null($this->getValue());
    }
    
    abstract public function compare($value);
}