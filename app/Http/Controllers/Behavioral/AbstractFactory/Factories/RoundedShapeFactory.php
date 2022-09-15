<?php

namespace App\Http\Controllers\Behavioral\AbstractFactory\Factories;

use App\Http\Controllers\Behavioral\AbstractFactory\Shapes\RoundedRectangle;
use App\Http\Controllers\Behavioral\AbstractFactory\Shapes\RoundedSquare;

class RoundedShapeFactory
{
    /**
     * @param string $shapeType
     *
     * @return \App\Http\Controllers\Behavioral\AbstractFactory\Shapes\RoundedSquare|\App\Http\Controllers\Behavioral\AbstractFactory\Shapes\RoundedRectangle|null
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
