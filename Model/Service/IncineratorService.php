<?php

namespace App\Model\Service;

use App\Model\Role\IncineratorInterface;
use App\Model\Service\AbstractWasteService;

class IncineratorService extends AbstractWasteService implements IncineratorInterface
{

    public function incinerate()
    {
    }
}