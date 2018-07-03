<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Composite;

/**
 * Class Composite
 * @package Structural\Composite
 */
class Composite extends AbstractComponent
{

    /**
     * @param AbstractComponent $component
     */
    public function add(AbstractComponent $component): void
    {
        $this->children[$component->name] = $component;
    }

    /**
     * @param string $componentName
     */
    public function remove(string $componentName): void
    {
        if (array_key_exists($componentName, $this->children)) {
            unset($this->children[$componentName]);
        }
    }

    /**
     * @param string $key
     * @return AbstractComponent
     */
    public function getChild(string $key): AbstractComponent
    {
        if (array_key_exists($key, $this->children)) {
            return $this->children[$key];
        }
    } // @codeCoverageIgnore
}