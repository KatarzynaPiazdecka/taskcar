<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
include_once "class.car.php";
include_once "class.racecar.php";

//$car = new Car();

//echo $car->HelloCar();

$myCar = new Car("Skoda", "Fabia", "silver", 5, 420);
$otherCar = new Car("FSO", "Polonez", "marine", 5, 420);

echo $myCar->helloCar()."\n";
echo $otherCar->helloCar()."\n";

echo "color: ".$otherCar->getColor()."\n";
echo
$otherCar->setColor("pink");
echo $otherCar->helloCar()."\n";

function introduceCar(Car $c){
	return "Hello! It's me - your car: ".$c->getColor(). " ".$c->getBrand()." ".$c->getModel()." ".$c->getNumberOfDoors();
}
echo introduceCar($myCar);


$auto = new RaceCar("Skoda", "Fabia", "silver", 5, 550);
echo "Maximum velocity: ".$auto->getVMax();
echo "Acceleration: ".$auto->getAcceleration();
echo "Horse Power: ".$auto->getengine()->getHP();

?>