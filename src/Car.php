<?php

namespace wappr;

use wappr\Contracts\CarInterface;

class Car implements CarInterface
{
    public function hitGas()
    {
        var_dump('Car is speeding up.');
    }

    public function hitBrakes()
    {
        var_dump('Car is slowing down.');
    }

    public function fillUp($gas = 87)
    {
        var_dump('Filling up the tank with '.$gas.' octane gas.');
    }
}
