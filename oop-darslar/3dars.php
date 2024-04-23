<?php
/*
    oop prinsiplari, 4ta. inheritance, polimorphism, abstraction, encapsulation
    3dars inheritance yoki meros olish yoki davom etish desa xam boladi
    kalit sozi extends boladi
    --------------------------------
    yangi sozlar:
    --------------------------------
    inheritance meros olish
    extends -> inheritance uchun kalit soz
    parent-child -> ota-onadan bolaga malumotlar meros berish 
    overriding -> ota clasdagi method yoki propertiylar ustidan yozib yangi qiymat berish
    final -> bu oxirgi class yoki methodlardan qayta yozish mumkin emas, chunki oxirgi class deb yozib qoyilyabdi

*/

class Car
{
    public $model;
    public $year;
    public function __construct($model, $year)
    {
        $this->model = $model;
        $this->year = $year;
    }

    public function driving()
    {
        return ' driving';
    }

    public function setModel($model)
    {
        $this->model = $model;
    }
}


final class ElectricCar extends Car
{
    public function stop(){
        return 'stop';
    }
}

// class RaceCar extends Car
// {
// }

// class PublicCar extends Car
// {
// }

$tesla = new ElectricCar('tesla XL', 2019);

var_dump($tesla);
