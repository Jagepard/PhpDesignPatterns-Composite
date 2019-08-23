<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */
namespace Structural\Composite;

interface CompositeInterface
{
    /**
     * @param AbstractComponent $component
     */
    public function add(AbstractComponent $component): void;

    /**
     * @param string $key
     */
    public function remove(string $key): void;

    /**
     * @param string $key
     * @return mixed|AbstractComponent|CompositeInterface
     */
    public function getChild(string $key);
}
