<?php

namespace wappr\Contracts;

interface CarInterface
{
    public function hitGas();

    public function hitBrakes();

    public function fillUp($gas = 87);
}
