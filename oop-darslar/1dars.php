<?php

// 1dars, properties, attributes;
class Car
{
    
    /* 
        classlar method va property saqlaydi 
        properties or attributes berish mumkin
        methodlar boladi bu function deb xam aytiladi
    */ 

    public $model;
    public $year;

    public function reFuel(){
       return 'toldirish'; 
    }

    public function getSpeed(){
        return 'tezlikni olish';
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function getModel($model){
        return $model;
    }
}
$bmw = new Car();
$bmw->setModel('bmw i8');
echo $bmw->model;