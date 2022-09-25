<?php

namespace App\Http\Controllers\Creational\Builder;

class Vehicle
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function show()
        {
            echo $this->type;
//            echo $this->type->frame;
////            echo $this->type['engine'];
////            echo $this->type['wheels'];
//            echo $this->type['doors'];
        }
}
