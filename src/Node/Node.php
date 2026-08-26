<?php

declare(strict_types=1);

namespace App\Node;

class Node
{
    public function __construct(
        private int $value,
        private array $children =[]
    ){
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function addChild(Node $node): void
    {
        $this->children[] = $node;
    }


}