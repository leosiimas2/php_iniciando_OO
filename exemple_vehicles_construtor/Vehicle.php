<?php

// Carro ira herdar metodos de veiculos, para exapandir suas
// funcionalidades, para outros tipos de veiculos

class Vehicle
{
  public $brand;
  public $color;
  public $engine;


  public function __construct($brand = null,$color = null)
  {
    $this->brand = $brand;
    $this->color = $color;
  }

  public function getEngine($type = "horsepower")
  {
    return "{$this->engine} {$type}";
  }

}




?>
