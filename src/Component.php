<?php
/**
 * Date: 02.04.18
 * Time: 13:30
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Composite;


abstract class Component
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
     * @param Component $component
     */
    public abstract function add(Component $component);

    /**
     * @param string $componentName
     */
    public abstract function remove(string $componentName);

    /**
     * @param null $key
     * @return mixed
     */
    public abstract function getChild($key = null);

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}