<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\VehiculeFactory;

$car = VehiculeFactory::create('car', 0.5, 'electric');
$truck = VehiculeFactory::create('truck', 0.3, 'fuel');
$bicycle = VehiculeFactory::create('bicycle', 0.1, 'muscle');

echo $car->getCostPerKm() . "\n";
echo $truck->getCostPerKm() . "\n";
echo $bicycle->getCostPerKm() . "\n";


$vehicule = VehiculeFactory::createPoidsDistance(10, 10);
echo $vehicule->getFuelType() . "\n";


$vehicule2 = VehiculeFactory::createPoidsDistance(300, 10);
echo $vehicule2->getFuelType() . "\n";