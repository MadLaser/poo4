<?php
class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'Fuel',
        'Electric',
    ];
    protected string $energy;
    protected int $energyLevel = 100;
    protected bool $isEngineOn = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->nbWheels = 4;
        $this->currentSpeed = 0;
    }

    public function start(): string
    {
        if ($this->isEngineOn) {
            return 'Engine is already On';
        } else {
            $this->isEngineOn = true;
            return 'Engine start';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getIsEngineOn(): bool
    {
        return $this->isEngineOn;
    }

    public function setIsEngineOn($isEngineOn): void
    {
        $this->isEngineOn = $isEngineOn;
    }
}