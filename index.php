<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Camion.php';
require_once 'PedestrianWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'HighWay.php';
require_once 'Skateboard.php';

$bicycle = new Bicycle('red', 2);

$car = new Car('red', 4, 'Fuel');
try {
    echo $car->start() . "<br>";
} catch (Exception $e) {
    $car->setHasParkBrake(false);
} finally {
    echo "Clear" . PHP_EOL;
}







// echo $car->getIsEngineOn() . "<br>";
//echo $car->forward() . '<br>';
//echo $car->getCurrentSpeed() . '<br>';
//$car->setCurrentSpeed('30');
//echo $car->getCurrentSpeed() . '<br>';
//echo $car->brake() . '<br>';
//echo $car->getCurrentSpeed() . '<br>'; 

$car2 = new Car('blue', 1, 'Electric');
try {
    echo $car2->start() . "<br>";
} catch (Exception $e) {
    $car2->setHasParkBrake(false);
} finally {
    echo "Clear" . PHP_EOL;
}

//echo $car2->getIsEngineOn() . "<br>";
//echo $car2->forward() . '<br>';
//echo $car2->getCurrentSpeed() . '<br>';
//$car2->setCurrentSpeed('30');
//echo $car2->getCurrentSpeed() . '<br>';

$camion = new Camion('blue', 3, 'Fuel', 2000);
echo $camion->isFilling() . '<br>';
$camion->setCharge(2000);
echo $camion->isFilling() . '<br>';

$skateboard = new Skateboard('pink', 1);

$pedestrian = new PedestrianWay();
$motor = new MotorWay();
$residential = new ResidentialWay();


echo PHP_EOL;
echo 'test pedestrian';
$pedestrian->addVehicle($skateboard);
$pedestrian->addVehicle($bicycle);
$pedestrian->addVehicle($car);

echo 'test Motor';
$motor->addVehicle($car);
$motor->addVehicle($bicycle);

echo 'test residential';
$residential->addVehicle($skateboard);
$residential->addVehicle($bicycle);
$residential->addVehicle($car);

var_dump($residential);
var_dump($motor);
var_dump($pedestrian);

var_dump($car);
var_dump($car2);
var_dump($bicycle);
var_dump(Car::ALLOWED_ENERGIES);
var_dump($camion);
