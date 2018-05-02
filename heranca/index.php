<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari =  new Car;
$ferrari->brand = "Ferrari";
$ferrari->color = "Red";
$ferrari->engine= 400;
$ferrari->doors= 2;


$mustang =  new Car;
$mustang->brand = "Mustang";
$mustang->color = "Yellow";
$mustang->engine= 300;
$mustang->doors= 2;

$m = new Motorcycle;
$m->brand = "Honda";
$m->color = "Blue";
$m->engine= 15;

echo $m->color;

?>
