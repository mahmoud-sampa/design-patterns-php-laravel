<?php

namespace App\Http\Controllers\Creational\AbstractFactory\Shapes;

use App\Http\Controllers\Creational\AbstractFactory\Contracts\Shape;

class Rectangle implements Shape
{
    public function draw()
    {
        echo 'Rectangle';
    }
}
