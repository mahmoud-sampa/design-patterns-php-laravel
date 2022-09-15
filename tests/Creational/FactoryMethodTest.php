<?php

namespace Tests\Creational;

use App\Http\Controllers\Behavioral\FactoryMethod\ShapeFactory;
use App\Http\Controllers\Behavioral\FactoryMethod\Shapes\Rectangle;
use App\Http\Controllers\Behavioral\FactoryMethod\Shapes\Square;
use Tests\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_factory_can_create_square()
    {
        $factory = new ShapeFactory('square');

        $this->assertInstanceOf(Square::class, $factory->shape());
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_factory_can_create_rectangle()
    {
        $factory = new ShapeFactory('rectangle');

        $this->assertInstanceOf(Rectangle::class, $factory->shape());
    }
}
