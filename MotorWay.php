<?php

final class MotorWay extends HighWay
{
    public function __construct(array $currentVehicles)
    {
        parent::__construct($currentVehicles, 4, 130);
    }

    public function addVehicle(vehicle $vehicle): void
    {
        if ($vehicle instanceof Cars || $vehicle instanceof Truck)
            $this->currentVehicles[] = $vehicle;
    }

}