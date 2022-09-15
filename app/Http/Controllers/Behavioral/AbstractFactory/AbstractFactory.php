<?php

namespace App\Http\Controllers\Behavioral\AbstractFactory;

use App\Http\Controllers\Behavioral\AbstractFactory\Factories\RoundedShapeFactory;
use App\Http\Controllers\Behavioral\AbstractFactory\Factories\ShapeFactory;

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
