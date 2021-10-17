<?php

namespace App\Model\InputReader;


class DataReader
{
    protected array $wasteTypes;
    protected array $services;


    public function setFile(string $path)
    {
        $this->getData = json_decode(
            file_get_contents($path),
            true
        );
        $this->wasteTypes = $this->getData['quartiers'];
        $this->services = $this->getData['services'];
    }
}