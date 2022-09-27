<?php
class Farm {
    private $lastNumber = 0;
    private $animals = [];

    function addNewAnimal($type){
        $animal = new $type($this->lastNumber);
        $parents = class_parents($animal);
        if (in_array('FarmAnimal', $parents)){
          $this->lastNumber++;
          $this->animals[] = $animal;
        }
        else {
          throw new Exception("$type is not farm animal!");
        }
    }

    function getCountOfAnimalsByTypes(){
      $count = array();
      foreach ($this->animals as $animal){
        $key = $animal->getNameOfClass();
        if (array_key_exists($key, $count)){
          $count[$key]++;
        }
        else
          $count[$key] = 1;
      }
      return $count;
    }

    function collectProduction($total){
      foreach ($this->animals as $animal){
        $key = $animal->getProductName();
        $value = $animal->getCountProduction();
        if (array_key_exists($key, $total)){
          $total[$key] += $value;
        }
        else
          $total[$key] = $value;
      }
      return $total;
    }

    function showAnimals(){
      $countAnimals = $this->getCountOfAnimalsByTypes();
      echo "Now we have: \n";
      foreach ($countAnimals as $type => $count){
        echo "{$type}s: $count\n";
      }
    }

    function showProduction($totalProduction){
      echo "Now our production: \n";
      foreach ($totalProduction as $production => $count){
        echo "$production: $count\n";
      }
    }
}
