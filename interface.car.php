<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );

interface CarInterface {
	public function getBrand();
	public function setBrand($brand);	
	public function getModel();
	public function setModel($model);
	public function getColor();
	public function setColor($color);
	public function getNumberOfDoors();
	public function setNumberOfDoors($number_of_doors);
	
}

