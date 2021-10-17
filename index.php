<?php

require_once 'autoload.php';

use App\Model\InputReader\DataReader;
use App\Model\InputReader\Co2Reader;

$waste = new DataReader();
$waste->setFile("./Input/data.json");

var_dump($waste);


$co2 = new Co2Reader();
$co2->setFile("./Input/co2.json");

var_dump($co2);
