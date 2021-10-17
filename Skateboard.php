<?php
require_once 'Vehicle.php';

class Skateboard extends Vehicle
{
    public function __contruct(string $color)    
    {
        $this->currentSpeed = 0;
        $this->$color = $color;
        $this->nbWheels = 4;
        $this->nbSeats = 1;
    }
}