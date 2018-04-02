<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\Composite\Composite;
use Structural\Composite\Leaf;


/**
 * Class SingletonsPoolTest
 */
class CompositeTest extends PHPUnit_Framework_TestCase
{

    protected $root;

    protected function setUp(): void
    {
        $this->root = new Composite('root');

        $this->root->add(new Composite('root'));
        $this->root->add(new Leaf('first'));
        $this->root->add(new Leaf('second'));
    }

    public function testComposite()
    {
        $this->assertArrayHasKey('root', $this->getRoot()->getChild());
        $this->assertCount(3, $this->getRoot()->getChild());

        $this->getRoot()->remove('second');
        $this->assertCount(2, $this->getRoot()->getChild());
    }

    public function testLeaf()
    {
        $this->assertEquals('first', $this->getRoot()->getChild('first')->getChild());
        $this->assertEquals('Cannot add to a leaf', $this->getRoot()->getChild('first')->add());
        $this->assertEquals('Cannot remove from a leaf', $this->getRoot()->getChild('first')->remove());
    }

    /**
     * @return mixed
     */
    public function getRoot()
    {
        return $this->root;
    }
}
