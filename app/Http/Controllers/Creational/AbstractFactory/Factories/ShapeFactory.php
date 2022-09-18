<?php

namespace App\Http\Controllers\Creational\AbstractFactory\Factories;

use App\Http\Controllers\Creational\AbstractFactory\Shapes\Rectangle;
use App\Http\Controllers\Creational\AbstractFactory\Shapes\Square;

class ShapeFactory
{
    /**
     * @param string $shapeType
     *
     * @return \App\Http\Controllers\Creational\AbstractFactory\Shapes\Rectangle|\App\Http\Controllers\Creational\AbstractFactory\Shapes\Square|null
     */
    public function getShape(string $shapeType): Rectangle|Square|null
    {
        if ($shapeType == "RECTANGLE") {
            return new Rectangle();
        } else if ($shapeType == "SQUARE") {
            return new Square();
        }

        return null;
    }
}
