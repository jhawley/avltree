<?php

namespace Hawley\AVLTree;

interface INode {
    public function getHeight();
    public function getLeft();
    public function getRight();
    public function getValue();
    public function setValue();
    public function isEmpty();
    public function compare($x, $y);
}

