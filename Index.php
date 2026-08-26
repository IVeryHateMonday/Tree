<?php

class Node
{

    public function __construct(public string $value)
    {

    }
    public array $children=[];

    public function addChildren(Node $node): void
    {
        $this->children[] = $node;
    }

    public function getChildren(): array
    {
        return $this->children;
    }
    public function render(): void
    {
        echo $this->value . PHP_EOL;
        foreach ($this->children as $child) {
             $child->render();
        }
    }
}

$node1 = new Node('root');

$node2 = new Node('leaf1');
$node3 = new Node('leaf2');
$node4 = new Node('leaf3');

$node2->addChildren($node4);
$node1->addChildren($node2);
$node1->addChildren($node3);
//
//print_r($node1);
$node1->render();
//print $node1->children[0]->value;