<?php

namespace wappr;

use wappr\Contracts\CarInterface;

class Person
{
    public function drive(CarInterface $car)
    {
        $car->fillUp();
        $car->hitGas();
        $car->hitBrakes();
    }
}
