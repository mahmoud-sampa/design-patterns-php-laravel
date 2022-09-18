<?php

namespace App\Http\Controllers\Creational\FactoryMethod;

use App\Http\Controllers\Creational\FactoryMethod\Contracts\Shape;
use App\Http\Controllers\Creational\FactoryMethod\Shapes\Rectangle;
use App\Http\Controllers\Creational\FactoryMethod\Shapes\Square;

class ShapeFactory
{
    private $shapeType;

    public function __construct($shapeType)
    {
        $this->shapeType = $shapeType;
    }

    /**
     * Return shape.
     *
     * @return \App\Http\Controllers\Creational\FactoryMethod\Contracts\Shape|null
     */
    public function shape(): ?Shape
    {
        if ($this->shapeType == 'rectangle') {
            return new Rectangle();
        } elseif ($this->shapeType == 'square') {
            return new Square();
        }

        return null;
    }
}
