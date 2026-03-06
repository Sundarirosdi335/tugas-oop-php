<?php

class Car {
    public $name;
    public $brand;

    function startEngine(){
        echo "Mobil $this->name dari brand $this->brand dinyalakan <br>";
    }

    function stopEngine(){
        echo "Mobil $this->name dimatikan <br>";
    }
}

$avanza = new Car();
$avanza->name = "Avanza";
$avanza->brand = "Toyota";

$almaz = new Car();
$almaz->name = "Almaz";
$almaz->brand = "Wuling";

$avanza->startEngine();
$almaz->stopEngine();

?>
