<?php

namespace App\Http\Controllers\Creational\AbstractFactory;

use App\Http\Controllers\Creational\AbstractFactory\Factories\RoundedShapeFactory;
use App\Http\Controllers\Creational\AbstractFactory\Factories\ShapeFactory;

class AbstractFactory
{
    private bool $rounded;

    /**
     * @param bool $rounded
     */
    public function __construct(bool $rounded)
    {
        $this->rounded = $rounded;
    }

    /**
     * Return shape.
     */
    public function getFactory()
    {
        if ($this->rounded) {
            return new RoundedShapeFactory();
        }

        return new ShapeFactory();
    }
}
