<?php

namespace App\Http\Controllers\Creational\Builder;

class ScooterBuilder implements VehicleBuilder
{
    private $vehicle;

    public function __construct()
    {
        $this->vehicle = new Vehicle('Scooter');
    }

    public function buildFrames()
    {
        $this->vehicle->frame = 'Scooter Frame';
    }

    public function buildEngine()
    {
        $this->vehicle->engine = '20 CC';
    }

    public function buildWheels()
    {
        $this->vehicle->wheels = 2;
    }

    public function buildDoors()
    {
        $this->vehicle->doors = 0;

    }
    public function getVehicle()
    {
        return $this->vehicle;
    }
}
