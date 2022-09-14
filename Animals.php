<?php

abstract class Animal{
    private $number;
    function __construct($number) {
        $this->number = $number;
    }
    public function getNameOfClass()
     {
        return static::class;
     }
    abstract public function getCountProduction();
    abstract public static function getProductName();
}

class Cow extends Animal{
  function getCountProduction(){
    return rand(8,12);
  }
  static function getProductName(){
    return 'Milk';
  }
}

class Chicken extends Animal{
  function getCountProduction(){
    return rand(0,1);
  }
  static function getProductName(){
    return 'Eggs';
  }
}
