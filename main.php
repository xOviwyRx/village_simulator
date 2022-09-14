<?php
  include 'Farm.php';
  include 'Animals.php';

  $farm = new Farm();
  for ($i=0; $i<10; $i++){
    $farm->addNewAnimal('Cow');
  }
  for ($i=0; $i<20; $i++){
    $farm->addNewAnimal('Chicken');
  }

  $countAnimals = $farm->getCountOfAnimalsByTypes();
  echo "Now we have: \n";
  foreach ($countAnimals as $type => $count){
    echo "  ".$type."s".': '.$count."\n";
  }
  echo "\nCollecting production 7 times...\n";
  for ($i=0, $totalProduction = array(); $i<7; $i++){
    $totalProduction = $farm->collectProduction($totalProduction);
  }
  echo "Now our production: \n";
  foreach ($totalProduction as $production => $count){
    echo "  ".$production.': '.$count."\n";
  }

  echo "\nBuying new animals...\n";
  for ($i=0; $i<5; $i++){
    $farm->addNewAnimal('Chicken');
  }
  $farm->addNewAnimal('Cow');

  $countAnimals = $farm->getCountOfAnimalsByTypes();
  echo "Now we have: \n";
  foreach ($countAnimals as $type => $count){
    echo "  ".$type."s".': '.$count."\n";
  }
  echo "\nCollecting production 7 times...\n";
  for ($i=0, $totalProduction = array(); $i<7; $i++){
    $totalProduction = $farm->collectProduction($totalProduction);
  }
  echo "Now our production: \n";
  foreach ($totalProduction as $production => $count){
    echo "  ".$production.': '.$count."\n";
  }

?>
