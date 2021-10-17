<?php

abstract class HighWay
{
    protected array $currentVehicle = [];
    protected int $nbLane;
    protected int $maxSpeed;
    
    abstract public function addVehicle(Vehicle $vehicle);

    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicle(array $currentVehicle)
    {
        $this->currentVehicle = $currentVehicle;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}