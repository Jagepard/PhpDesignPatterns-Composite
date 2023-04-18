<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Composite;

abstract class AbstractComponent
{
    protected string $name;

    /**
     * Sets the name
     * -------------
     * Устанавливает имя
     *
     * @param  string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Gets a name
     * -----------
     * Получает имя
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
