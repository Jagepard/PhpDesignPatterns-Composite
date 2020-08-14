<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Composite;

interface CompositeInterface
{
    public function add(AbstractComponent $component): void;
    public function remove(string $key): void;
    public function getChild(string $key);
}
