<?php

final class ResidentialWay extends HighWay
{
    public function __construct(array $currentVehicles)
    {
        parent::__construct($currentVehicles, 2, 50);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Vehicle)
            $this->currentVehicles[] = $vehicle;
    }

}