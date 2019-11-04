<?php

require_once '../vendor/autoload.php';


/*$bicycle = new App\Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h <br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h <br>';
echo $bicycle->brake();

$car = new App\Car('green', 4, 'electric');
echo $car->forward();
var_dump(Car::ALLOWED_ENERGIES);
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h <br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h <br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h <br>';
echo $car->brake();

$truck = new App\Truck('red', 6, 'diesel');
echo $truck->forward();
var_dump(Car::ALLOWED_ENERGIES);
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h <br>';
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h <br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h <br>';
echo $truck->brake();
echo '<br> Masse dans le camion : ' . $truck->getCapacity() . ' kg <br>';
echo $truck->capacity();
echo '<br> Masse dans le camion : ' . $truck->getCapacity() . ' kg <br>';
echo $truck->filling();
echo '<br> Masse dans le camion : ' . $truck->getCapacity() . ' kg <br>';
echo $truck->filling();

/*Quete POO3*/

$pedestrianWayObject = new App\PedestrianWay();

$carOfQuentin = new App\Car();

var_dump($pedestrianWayObject);

$pedestrianWayObject->addVehicle($pedestrianWayObject);

var_dump($pedestrianWayObject);

$bikeOfQuentin = new App\Bicycle();
$pedestrianWayObject->addVehicle($bikeOfQuentin);
var_dump($pedestrianWayObject);
?>