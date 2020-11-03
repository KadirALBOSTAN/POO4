<?php

final class PedestrianWay extends HighWay
{
    public function __construct(array $currentVehicles)
    {
        parent::__construct($currentVehicles, 1, 10);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard)
            $this->currentVehicles[] = $vehicle;
    }
}
