<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    protected $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    public function setHasParkBrake($hasParkBreak)
    {
        $this->hasParkBrake = $hasParkBreak;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true)
            throw(new Exception("Handbrake is activated!"));
        else
            $this->currentSpeed = 3; // Car starts to roll forward, like in "real life"
        return "Car started !";
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}