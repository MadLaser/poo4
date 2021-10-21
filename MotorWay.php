<?php

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle($car)
    {
        if($car instanceof Car){
            array_push($this->currentVehicle, $car);
            echo 'added'  . PHP_EOL;
        } else {
            echo 'wrong class'  . PHP_EOL;
        }
    }
}