<?php

namespace App\Http\Controllers\Behavioral\AbstractFactory\Shapes;

use App\Http\Controllers\Behavioral\AbstractFactory\Contracts\Shape;

class Square implements Shape
{
    public function draw()
    {
        echo 'Square';
    }
}
