
<?php

require_once("Vehicle.php");

class Car extends Vehicle
{
  public $brand;
  public $color;
  public $engine;

  public function getEngine($type = "horsepower")
  {
    return "{$this->engine} {$type}";
  }
}








?>
