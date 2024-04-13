<?php
//2dars
//contructor funksiya

class Car {
    public $name;
    public $model;
    public $year;
    public function __construct($name, $model, $year) 
    {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;        
    }
}

$bmw = new Car('BMW', 'i8', '2019');
$bmw2 = new Car('BMW', 'i8', '2020');
var_dump($bmw);