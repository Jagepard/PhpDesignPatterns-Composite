<?php
/**
 * Date: 02.04.18
 * Time: 13:35
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Composite;


class Composite extends Component
{

    /**
     * @param Component $component
     */
    public function add(Component $component): void
    {
        $this->children[$component->getName()] = $component;
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
     * @param null $key
     * @return array|mixed
     */
    public function getChild($key = null)
    {
        return $this->children[$key] ?? $this->children;
    }
}