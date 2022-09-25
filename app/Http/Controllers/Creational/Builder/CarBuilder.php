<?php

namespace App\Http\Controllers\Creational\Builder;

class CarBuilder implements VehicleBuilder
{
    private $vehicle;

    public function __construct()
    {
        $this->vehicle = new Vehicle('Car');
    }

    public function buildFrames()
    {
        $this->vehicle->frame = 'Car Frame';
    }

    public function buildEngine()
    {
        $this->vehicle->engine = '2000 CC Turbo';
    }

    public function buildWheels()
    {
        $this->vehicle->wheels = 4;
    }

    public function buildDoors()
    {
        $this->vehicle->doors = 4;
    }

    public function getVehicle()
    {
        return $this->vehicle;
    }
}
