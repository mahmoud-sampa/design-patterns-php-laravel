<?php

namespace App\Http\Controllers\Creational\Builder;

class VehicleShop
{
    // Builder uses a complex series of steps
    public function buy(VehicleBuilder $vehicleBuilder)
    {
        $vehicleBuilder->buildFrames();
        $vehicleBuilder->buildWheels();
        $vehicleBuilder->buildEngine();
        $vehicleBuilder->buildDoors();
        $vehicle = $vehicleBuilder->getVehicle();
        $vehicle->show();
    }
}
