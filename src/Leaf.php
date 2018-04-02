<?php
/**
 * Date: 02.04.18
 * Time: 13:42
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Composite;


class Leaf extends Component
{

    /**
     * @param Component $component
     * @return string
     */
    public function add(Component $component = null)
    {
        return 'Cannot add to a leaf';
    }

    /**
     * @param string|null $componentName
     * @return string
     */
    public function remove(string $componentName = null)
    {
        return 'Cannot remove from a leaf';
    }

    /**
     * @param null $key
     * @return mixed|string
     */
    public function getChild($key = null)
    {
        return $this->getName();
    }
}