<?php
class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'Fuel',
        'Electric',
    ];
    protected string $energy;
    protected int $energyLevel = 100;
    protected bool $isEngineOn = false;
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->nbWheels = 4;
        $this->currentSpeed = 0;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function start(): string
    {
        if ($this->getHasParkBrake()) {
            throw new Exception("This car is parked");
        }

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

    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
}
