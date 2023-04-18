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

    /**
     * Adds a component
     * ----------------
     * Добавляет компонент
     *
     * @param  AbstractComponent $component
     * @return void
     */
    public function add(AbstractComponent $component): void
    {
        if (array_key_exists($component->getName(), $this->children)) {
            throw new \InvalidArgumentException("Element {$component->getName()} is already exist");
        }

        $this->children[$component->getName()] = $component;
    }

    /**
     * Removes a component
     * -------------------
     * Удаляет компонент
     *
     * @param  string $key
     * @return void
     */
    public function remove(string $key): void
    {
        if (!array_key_exists($key, $this->children)) {
            throw new \InvalidArgumentException("Element {$key} doesn't exist");
        }

        unset($this->children[$key]);
    }

    /**
     * Gets a child
     * ------------
     * Получает потомка
     *
     * @param  string $key
     * @return void
     */
    public function getChild(string $key)
    {
        if (array_key_exists($key, $this->children)) {
            return $this->children[$key];
        }

        throw new \InvalidArgumentException("Element {$key} doesn't exist");
    } // @codeCoverageIgnore

    /**
     * Displays the tree of descendants
     * --------------------------------
     * Отображает дерево потомков
     *
     * @param  AbstractComponent|null $child
     * @param  [type]                 $tab
     * @return void
     */
    public function printTree(AbstractComponent $child = null, $tab = null): void
    {
        $parent = $child ?? $this;
        echo $tab . $parent->getName() . ": " . "\n";

        if (count($parent->children) !== 0) {
            $tab = $tab . "\t";
            foreach ($parent->children as $child) {
                if ($child instanceof Composite) {
                    $this->printTree($child, $tab);
                } else {
                    echo $tab . $child->getName() . "\n";
                }
            }

            return;
        }
    }
}
