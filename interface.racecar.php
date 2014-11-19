<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );

interface RaceCarInterface {
    public function getVMax();
    public function getAcceleration();
}

