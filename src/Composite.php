<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Composite;

class Composite extends AbstractComponent implements CompositeInterface
{
    protected array $children = [];

    public function add(AbstractComponent $component): void
    {
        if (array_key_exists($component->getName(), $this->children)) {
            throw new \InvalidArgumentException("Element {$component->getName()} is already exist");
        }

        $this->children[$component->getName()] = $component;
    }

    public function remove(string $key): void
    {
        if (!array_key_exists($key, $this->children)) {
            throw new \InvalidArgumentException("Element {$key} doesn't exist");
        }

        unset($this->children[$key]);
    }

    public function getChild(string $key)
    {
        if (array_key_exists($key, $this->children)) {
            return $this->children[$key];
        }

        throw new \InvalidArgumentException("Element {$key} doesn't exist");
    } // @codeCoverageIgnore

    public function printTree(AbstractComponent $child = null, $tab = null): void
    {
        $parent = !isset($child) ? $this : $child;
        echo $tab . $parent->getName() . ": " . "\n";

        if (count($parent->getChildren()) !== 0) {
            $tab = $tab . "\t";
            foreach ($parent->getChildren() as $child) {
                if ($child instanceof Composite) {
                    $this->printTree($child, $tab);
                } else {
                    echo $tab . $child->getName() . "\n";
                }
            }

            return;
        }
    }

    public function getChildren(): array
    {
        return $this->children;
    }
}
