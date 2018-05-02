<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari =  new Car("Ferrari","Red");
$ferrari->engine= 400;
$ferrari->doors= 2;

$mustang =  new Car;
$mustang->brand = "Mustang";
$mustang->color = "Yellow";
$mustang->engine= 300;
$mustang->doors= 2;

$m = new Motorcycle("Honda","Blue");
$m->engine= 150;

echo $m->color;

?>
