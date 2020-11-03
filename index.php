<?php

require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$Lambo = new Car("black", "5", "diesel");
try {
    echo "Essaye de démarrer la voiture!<br>";
    $Lambo->start();
} catch(Exception $e) {
    $Lambo->setHasParkBrake(false);
    echo $e->getMessage() . " On a enlevé le frein à main, on peut démarrer!<br>";
    $Lambo->start();
} finally {
    echo "Ma voiture roule comme un donut";
}
