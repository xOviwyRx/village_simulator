<?php
class Chicken extends FarmAnimal{
  function getCountProduction(){
    return rand(0,1);
  }
  static function getProductName(){
    return 'Eggs';
  }
}
