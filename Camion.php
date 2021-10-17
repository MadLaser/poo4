<?php
class Camion extends Car
{
    private int $stockCapacity;
    private int $charge = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->stockCapacity = $stockCapacity;
    }

    public function isFilling(): string
    {
        if($this->charge == $this->stockCapacity) {
            return 'Full';
        } elseif ($this->charge < $this->stockCapacity) {
            return 'in filling';
        } else {
            return 'error charge > stockCapacity';
        }
    }

    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity($stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getCharge(): int
    {
        return $this->charge;
    }

    public function setCharge($charge): void
    {
        $this->charge = $charge;
    }
}