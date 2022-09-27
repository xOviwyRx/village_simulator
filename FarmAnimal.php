<?php

abstract class FarmAnimal{
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
