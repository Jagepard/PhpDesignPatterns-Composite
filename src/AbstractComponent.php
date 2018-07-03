<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Composite;

/**
 * Class Component
 * @package Structural\Composite
 */
abstract class AbstractComponent
{

    /**
     * @var string
     */
    protected $name;
    /**
     * @var array
     */
    protected $children = [];

    /**
     * Component constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}