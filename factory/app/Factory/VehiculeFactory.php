<?php
namespace App\Factory;

class VehiculeFactory {
    public static function create($type, $costPerKm, $fuelType) {
        switch ($type) {
            case 'car':
                return new \App\Entity\Car($costPerKm, $fuelType);
            case 'truck':
                return new \App\Entity\Truck($costPerKm, $fuelType);
            case 'bicycle':
                return new \App\Entity\Bicycle($costPerKm, $fuelType);
            default:
                throw new \Exception('wrong vehicule type');
        }
    }
    
    public static function createPoidsDistance($poids, $disatance ) {
        if ($poids > 200) {
            return new \App\Entity\Truck(0.3, 'fuel');
        } else if ($poids < 20 && $disatance < 20) {
            return new \App\Entity\Bicycle(0.1, 'muscle');
        } else {
            return new \App\Entity\Car(0.5, 'electric');
        }
    }

}