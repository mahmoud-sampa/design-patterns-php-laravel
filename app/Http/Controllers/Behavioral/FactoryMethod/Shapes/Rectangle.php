<?php

namespace App\Http\Controllers\Behavioral\FactoryMethod\Shapes;

use App\Http\Controllers\Behavioral\FactoryMethod\Contracts\Shape;

class Rectangle implements Shape
{
    public function draw()
    {
        echo 'rectangle';
    }
}
