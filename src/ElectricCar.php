<?php

namespace wappr;

use wappr\Contracts\ElectricCarInterface;

class ElectricCar implements ElectricCarInterface
{

    public function accelerate()
    {
        var_dump('Quietly speeding up.');
    }

    public function hitBrakes()
    {
        var_dump('Batteries are off and slowing down.');
    }

    public function recharge($duration, $numberOfBatteries)
    {
        var_dump('Car charged '.$numberOfBatteries.' for '.$duration);
    }
}
