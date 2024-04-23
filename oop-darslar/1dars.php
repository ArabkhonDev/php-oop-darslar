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

    private function getModel($model){
        return $model;
    }
}
$bmw = new Car('', '', 2023);
$bmw->setModel('bmw i8');
echo $bmw->model;