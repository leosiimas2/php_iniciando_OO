
<?php

require_once("Vehicle.php");

class Car extends Vehicle
{
  private $doors;
  //private $doors;
  //public, consegue acessar em outras partes dpo projeto;
  //private, não pode ser acessado em outras partes do projeto;

  public function setDoors($doors){
    $this->doors = $doors;
  }

  public function getDoors(){
    return $this->doors;
  }
}










?>
