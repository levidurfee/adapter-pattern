<?php

namespace wappr\Adapters;

use wappr\Contracts\CarInterface;
use wappr\Contracts\ElectricCarInterface;

class CarAdapter implements CarInterface
{
    protected $electricCar;

    public function __construct(ElectricCarInterface $electricCar)
    {
        $this->electricCar = $electricCar;
    }

    public function hitGas()
    {
        $this->electricCar->accelerate();
    }

    public function hitBrakes()
    {
        $this->electricCar->hitBrakes();
    }

    public function fillUp($gas = 87)
    {
        // How would this be handled?
        $this->electricCar->recharge();
    }
}
