<?php
/*
    Abstract classlar -> mavxum klasslar bularni abstrakt sozi orqali yasaladi
    bunda abstrakt yasalgan klassdan object yasab bolmaydi va qiymat xam berib bolmaydi
    ----------------------------------------------------------------
    Abstrakt klassdan qiymat olish uchun undan child class inherit qilib keyin qiymatlaridan yasaladi  
    abstrakt metodlarda tanasi bolmaydi <=> abstract public function stop() <=>, buni child classda ishlatib qoyish majbur bolmasa xato beradi. methodlarga parametr berilsa, child classda parametr berish majbur,

*/

abstract class Car
{
    //property or attribute
    protected $model;
    // public $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    abstract public function stop();
}

class ElectricCar extends Car{
    public function stop(){
        // return true;
    }
}

$tesla = new ElectricCar('tesla X-L');


// echo $tesla->model;
var_dump($tesla);