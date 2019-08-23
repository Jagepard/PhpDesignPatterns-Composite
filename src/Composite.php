<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Composite;

class Composite extends AbstractComponent implements CompositeInterface
{
    /**
     * @var array
     */
    protected $children = [];

    /**
     * @param AbstractComponent $component
     */
    public function add(AbstractComponent $component): void
    {
        if (array_key_exists($component->getName(), $this->children)) {
            throw new \InvalidArgumentException("Element {$component->getName()} is already exist");
        }

        $this->children[$component->getName()] = $component;
    }

    /**
     * @param string $key
     */
    public function remove(string $key): void
    {
        if (!array_key_exists($key, $this->children)) {
            throw new \InvalidArgumentException("Element {$key} doesn't exist");
        }

        unset($this->children[$key]);
    }

    /**
     * @param string $key
     * @return mixed|AbstractComponent|CompositeInterface
     */
    public function getChild(string $key)
    {
        if (array_key_exists($key, $this->children)) {
            if ($this->children[$key] instanceof CompositeInterface) {
                return $this->getComposite($key);
            }

            return $this->children[$key];
        }

        throw new \InvalidArgumentException("Element {$key} doesn't exist");
    } // @codeCoverageIgnore

    /**
     * @param string $key
     * @return CompositeInterface
     */
    private function getComposite(string $key): CompositeInterface
    {
        if (array_key_exists($key, $this->children)) {
            return $this->children[$key];
        }

        throw new \InvalidArgumentException("Element {$key} doesn't exist");
    }
}
