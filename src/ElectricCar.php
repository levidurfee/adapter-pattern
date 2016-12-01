<?php

namespace wappr;

use wappr\Contracts\ElectricCarInterface;

class ElectricCar implements ElectricCarInterface
{
    protected $duration;
    protected $numberOfBatteries;

    /**
     * ElectricCar constructor.
     * @param $duration
     * @param $numberOfBatteries
     */
    public function __construct($duration, $numberOfBatteries)
    {
        // I  could perform any checks on the data being passed to the construct
        $this->duration = $duration;
        $this->numberOfBatteries = $numberOfBatteries;
    }

    public function accelerate()
    {
        var_dump('Quietly speeding up.');
    }

    public function hitBrakes()
    {
        var_dump('Batteries are off and slowing down.');
    }

    public function recharge()
    {
        var_dump('Car charged '.$this->numberOfBatteries.' batteries for '.$this->duration);
    }
}
