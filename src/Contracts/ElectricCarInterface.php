<?php

namespace wappr\Contracts;

interface ElectricCarInterface
{
    public function accelerate();

    public function hitBrakes();

    public function recharge($duration, $numberOfBatteries);
}
