<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }

    public function addVehicle($vehicle)
    {
        array_push($this->currentVehicle, $vehicle);
        echo 'added' . PHP_EOL;
    }
}
