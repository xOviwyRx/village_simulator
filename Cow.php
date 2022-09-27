<?php
class Cow extends FarmAnimal{
  function getCountProduction(){
    return rand(8,12);
  }
  static function getProductName(){
    return 'Milk';
  }
}
