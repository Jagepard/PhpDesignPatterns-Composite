<?php

namespace Structural\Composite;

require_once "vendor/autoload.php";

$root = new Composite("Composite");

try {
    $root->add(new Leaf("Leaf:first"));
    $root->add(new Leaf("Leaf:second"));
    $root->add(new Composite("Composite - 1"));
    $root->getChild("Composite - 1")->add(new Leaf("Leaf:first"));
    $root->getChild("Composite - 1")->add(new Leaf("Leaf:second"));
    $root->getChild("Composite - 1")->add(new Composite("Composite - 2"));

    $root->printTree();
} catch (\Exception $e) {
    echo "Caught exception: ", $e->getMessage(), "\n";
}
