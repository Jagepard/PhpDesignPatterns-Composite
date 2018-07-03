<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Composite\Tests;

use Structural\Composite\AbstractComponent;
use Structural\Composite\Leaf;
use Structural\Composite\Composite;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class CompositeTest
 * @package Structural\Composite\Tests
 */
class CompositeTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Composite
     */
    protected $root;

    protected function setUp(): void
    {
        $this->root = new Composite('root');
    }

    public function testComposite()
    {
        $this->assertInstanceOf(AbstractComponent::class, $this->root);

        $this->root->add(new Composite('root'));
        $this->assertInstanceOf(Composite::class, $this->root->getChild('root'));
        $this->assertEquals('root', $this->root->getChild('root')->getName());
        $this->root->remove('root');
    }

    public function testLeaf()
    {
        $this->root->add(new Composite('root'));
        $this->root->getChild('root')->add(new Leaf('first'));
        $this->assertInstanceOf(Leaf::class, $this->root->getChild('root')->getChild('first'));
    }
}
