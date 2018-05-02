<?php

require_once("Car.php");

$ferrari =  new Car;
$ferrari->brand = "Ferrari";
$ferrari->color = "red";
$ferrari->engine= 400;


$mustang =  new Car;
$mustang->brand = "Mustang";
$mustang->color = "Yellow";
$mustang->engine= 300;

echo $mustang->getENgine("hp");


?>
