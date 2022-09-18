<?php

namespace App\Http\Controllers\Creational\AbstractFactory\Contracts;

interface AbstractFactoryContract
{
    public function getShape(string $shapeType);
}
