<?php

namespace App\Http\Controllers\Creational\Builder;

class BuilderApp
{
    private VehicleShop $shop;

    public function __construct()
    {
        $this->shop = new VehicleShop();
        $this->shop->buy(new ScooterBuilder());
    }


}
