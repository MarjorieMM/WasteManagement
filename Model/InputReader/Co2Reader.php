<?php

namespace App\Model\InputReader;


class Co2Reader
{
    protected array $co2;


    public function setFile(string $path)
    {
        $this->getData = json_decode(
            file_get_contents($path),
            true
        );
        $this->co2 = $this->getData;
    }
}
