<?php

namespace Tests\Creational;

use App\Http\Controllers\Creational\AbstractFactory\AbstractFactory;
use App\Http\Controllers\Creational\AbstractFactory\Shapes\Rectangle;
use App\Http\Controllers\Creational\AbstractFactory\Shapes\RoundedRectangle;
use App\Http\Controllers\Creational\AbstractFactory\Shapes\RoundedSquare;
use App\Http\Controllers\Creational\AbstractFactory\Shapes\Square;
use Tests\TestCase;

class AbstractFactoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_factory_can_create_square()
    {
        $abstractFactory = new AbstractFactory(false);

        $factory = $abstractFactory->getFactory();

        $shape = $factory->getShape('SQUARE');

        $this->assertInstanceOf(Square::class, $shape);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_factory_can_create_rectangle()
    {
        $abstractFactory = new AbstractFactory(false);

        $factory = $abstractFactory->getFactory();

        $shape = $factory->getShape('RECTANGLE');

        $this->assertInstanceOf(Rectangle::class, $shape);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_factory_can_create_rounded_rectangle()
    {
        $abstractFactory = new AbstractFactory(true);

        $factory = $abstractFactory->getFactory();

        $shape = $factory->getShape('RECTANGLE');

        $this->assertInstanceOf(RoundedRectangle::class, $shape);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_factory_can_create_rounded_square()
    {
        $abstractFactory = new AbstractFactory(true);

        $factory = $abstractFactory->getFactory();

        $shape = $factory->getShape('SQUARE');

        $this->assertInstanceOf(RoundedSquare::class, $shape);
    }
}
