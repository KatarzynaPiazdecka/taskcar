<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
include_once "interface.car.php";
include_once "class.engine.php";


class Car implements CarInterface {

	private $brand;
	private $model;
	private $color;
	private $numberOfDoors;
	private $engine;


	//public function Car() {
	//	$this->brand="Ford";
	//	$this->model="Fiesta";
	//	$this->color="rinbow";
	//	$this->numberOfDoors="5";
	//}

	public function __construct($b, $m, $c, $nod, $hp) {
		$this->brand=$b;
		$this->model=$m;
		$this->color=$c;
		$this->numberOfDoors=$nod;
		$this->engine = new Engine($hp);
	}

	public function helloCar(){
		return "Hello! It's me - your car: ".$this->color. " ".$this->brand." ".$this->model." ".$this->numberOfDoors."";
	}

	public function getBrand(){
		return $this->brand;
	}
	public function setBrand($brand){
		$this->brand=$brand;
	}	
	public function getModel(){
		return $this->model;
	}
	public function setModel($model){
		$this->model=$model;
	}
	public function getColor(){
		return $this->color;
	}
	public function setColor($color){
		$this->color=$color;
	}
	public function getNumberOfDoors(){
		return $this->numberOfDoors;
	}
	public function setNumberOfDoors($number_of_doors){
		$this->numberOfDoors=$number_of_doors;
	}
	public function getEngine() {
		return $this->engine;
	}
}

