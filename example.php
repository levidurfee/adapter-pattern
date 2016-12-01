<?php

use wappr\Adapters\CarAdapter;
use wappr\Car;
use wappr\ElectricCar;
use wappr\Person;

require 'vendor/autoload.php';

$car = new Car;

$person = new Person;
// We can drive this car with no problems.
$person->drive($car);

// How do we refuel this electric car?
$electricCar = new ElectricCar(60, 4);
$newCar = new CarAdapter($electricCar);
$person->drive($newCar);
