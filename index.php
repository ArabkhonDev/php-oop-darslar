<?php

class Fruit{
    protected $weight;
    private $year;
    // public function setWeight($value){$this->weight = $value;}
    // public function getWeight(){return $this->weight;}

    // public function setYear($year){$this->year = $year;}
    // public function getYear(){return $this->year;}
}

class Apple extends Fruit{

    public function __construct($weight)
    {   
        $this->weight = $weight;
    }
    // public function weight()
    // {
    //     return $this->weight;
    // }
}

$apple = new Apple("12");
// $apple->setWeight('10: ');
// $apple->setYear('2010');
// $apple->weight('1');
// echo $apple->getWeight();
// echo $apple->getYear();
var_dump($apple);