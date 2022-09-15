<?php

namespace App\Http\Controllers\Behavioral\FactoryMethod;

use App\Http\Controllers\Behavioral\FactoryMethod\Contracts\Shape;
use App\Http\Controllers\Behavioral\FactoryMethod\Shapes\Rectangle;
use App\Http\Controllers\Behavioral\FactoryMethod\Shapes\Square;

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
     * @return \App\Http\Controllers\Behavioral\FactoryMethod\Contracts\Shape|null
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
