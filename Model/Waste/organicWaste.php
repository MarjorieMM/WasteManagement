<?php

namespace App\Model\Waste;

class OrganicWaste extends AbstractWaste
{

    protected int $co2EmissionComp;

    public function setCo2EmissionComp($co2EmissionComp): self
    {
        $this->co2EmissionComp = $co2EmissionComp;
        return $this;
    }
}
