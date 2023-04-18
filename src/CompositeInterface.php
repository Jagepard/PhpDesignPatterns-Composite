<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Composite;

interface CompositeInterface
{
    /**
     * @param  AbstractComponent $component
     * @return void
     */
    public function add(AbstractComponent $component): void;

    /**
     * @param  string $key
     * @return void
     */
    public function remove(string $key): void;

    /**
     * @param  string $key
     * @return void
     */
    public function getChild(string $key);
}
