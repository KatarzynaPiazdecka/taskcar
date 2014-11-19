<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
include_once "class.car.php";
include_once "interface.engine.php";

class Engine implements EngineInterface {
	private $horsepower;
	
	public function __construct($hp) {
		$this->horsepower = $hp;
	}
	
	public function getHP() {
		return $this->horsepower;
	}
}