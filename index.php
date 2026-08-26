<?php

require __DIR__ . '/vendor/autoload.php';

use App\Node\Node;

$tree = new Node(1);

echo $tree->getValue();