<?php

namespace App\Http\Controllers\Creational\Builder;

interface VehicleBuilder
{
    public function buildFrames();
    public function buildEngine();
    public function buildWheels();
    public function buildDoors();
    public function getVehicle();
}
