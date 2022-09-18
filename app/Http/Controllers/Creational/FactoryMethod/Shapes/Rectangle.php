<?php

namespace App\Http\Controllers\Creational\FactoryMethod\Shapes;

use App\Http\Controllers\Creational\FactoryMethod\Contracts\Shape;

class Rectangle implements Shape
{
    public function draw()
    {
        echo 'rectangle';
    }
}
