<?php
class Bicycle extends Vehicle implements LightableInterface
{
    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
        $this->nbWheels = 2;
        $this->currentSpeed = 0;
    }


    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}
