<?php

namespace App\Http\Controllers\Behavioral\AbstractFactory\Contracts;

interface AbstractFactoryContract
{
    public function getShape(string $shapeType);
}
