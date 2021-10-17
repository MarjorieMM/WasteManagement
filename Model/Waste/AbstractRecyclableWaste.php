<?php

namespace App\Model\Waste;

abstract class AbstractRecyclableWaste extends AbstractWaste
{
    protected int $co2EmissionRec;

    public function setCo2EmissionRec(int $co2EmissionRec): self
    {
        $this->co2EmissionRec = $co2EmissionRec;
        return $this;
    }
}