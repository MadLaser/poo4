<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            array_push($this->currentVehicle, $vehicle);
            echo 'added' . PHP_EOL;
        } else {
            echo 'wrong class' . PHP_EOL;
        }
    }
}