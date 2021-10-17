<?php

namespace App\Model\Waste;

abstract class AbstractWaste
{
    protected int $quantity;
    protected int $co2EmissionInc;

    public function __construct(int $quantity, int $co2EmissionInc)
    {
        $this->quantity = $quantity;
        $this->co2EmissionInc = $co2EmissionInc;
    }
}