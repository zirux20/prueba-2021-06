<?php
namespace App;

  class Persona
 {
    private  $name = '';
    private $vegetarian = false;
    private $age = 0;
    private $height = 0;
    private $birthDate = '';
    private $nationality = '';
    private $occupation ='';

    public function __construct($name,$age, $vegetarian,$height, $birthDate,$nationality, $occupation)
    {
        $this->name =$name;
        $this->vegetarian =$vegetarian;
        $this->age=$age;
        $this->height =$height;
        $this->birthDate = $birthDate;
        $this->nationality = $nationality;
        $this->occupation = $occupation;
    }
      public function __get($propiedad)
      {
          if(property_exists($this, $propiedad)){
              return $this->$propiedad;
          }
      }
      public function __set($propiedad, $valor)
      {
          if (property_exists($propiedad, $valor)) {
              $this->$propiedad = $valor;
          }
      }

  }