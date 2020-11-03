<?php

abstract class HighWay
{

    protected $currentVehicles;

    protected $nbLane;

    protected $maxSpeed;

    private function __construct($nbLane,$maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getCurrentVehicles(): string
    {
        return $this->currentVehicles."<br/>";
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    abstract public function addVehicle(vehicle $vehicle);
}