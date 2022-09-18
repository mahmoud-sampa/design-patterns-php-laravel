<?php

namespace App\Http\Controllers\Creational\AbstractFactory\Factories;

use App\Http\Controllers\Creational\AbstractFactory\Shapes\RoundedRectangle;
use App\Http\Controllers\Creational\AbstractFactory\Shapes\RoundedSquare;

class RoundedShapeFactory
{
    /**
     * @param string $shapeType
     *
     * @return \App\Http\Controllers\Creational\AbstractFactory\Shapes\RoundedSquare|\App\Http\Controllers\Creational\AbstractFactory\Shapes\RoundedRectangle|null
     */
    public function getShape(string $shapeType): RoundedSquare|RoundedRectangle|null
    {
        if ($shapeType == "RECTANGLE") {
            return new RoundedRectangle();
        } else if ($shapeType == "SQUARE") {
            return new RoundedSquare();
        }

        return null;
    }
}
