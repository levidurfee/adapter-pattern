<?php
use wappr\Car;
use wappr\Person;

require ('vendor/autoload.php');

$car = new Car;

$person = new Person;
// We can drive this car with no problems.
$person->drive($car);

// How do we refuel this electric car?
$electricCar = new \wappr\ElectricCar;
$newCar = new \wappr\Adapters\CarAdapter($electricCar);
$person->drive($newCar);

