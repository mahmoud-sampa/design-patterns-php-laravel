<?php

namespace App\Http\Controllers\Creational\Builder;

class MotorCycleBuilder implements VehicleBuilder
{
    private $vehicle;

    public function __construct()
    {
        $this->vehicle = new Vehicle('MotorCycle');
    }

    public function buildFrames()
    {
        $this->vehicle->frame = 'MotorCycle Frame';
    }

    public function buildEngine()
    {
        $this->vehicle->engine = '80 CC';
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
