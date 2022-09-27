<?php
  spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
  });

  $farm = new Farm();
  for ($i=0; $i<10; $i++){
    $farm->addNewAnimal('Cow');
  }
  for ($i=0; $i<20; $i++){
    $farm->addNewAnimal('Chicken');
  }

  $farm->showAnimals();
  echo "\nCollecting production 7 times...\n";
  for ($i=0, $totalProduction = array(); $i<7; $i++){
    $totalProduction = $farm->collectProduction($totalProduction);
  }
  $farm->showProduction($totalProduction);

  echo "\nBuying new animals...\n";
  for ($i=0; $i<5; $i++){
    $farm->addNewAnimal('Chicken');
  }
  $farm->addNewAnimal('Cow');

  $farm->showAnimals();
  echo "\nCollecting production 7 times...\n";
  for ($i=0, $totalProduction = array(); $i<7; $i++){
    $totalProduction = $farm->collectProduction($totalProduction);
  }
  $farm->showProduction($totalProduction);

?>
