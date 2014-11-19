<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
include_once "class.car.php";
include_once "class.engine.php";
include_once "interface.racecar.php";

class RaceCar extends Car implements RaceCarInterface {
	private $acceleration;
	private $vmax;
	private $engine;
	

	public function getVMax() {
		return (($this->getengine()->getHP())*3);
	}
	public function getAcceleration() {
		return (($this->getengine()->getHP())-4);
	}
}

