<?php
/*
   Access modifiers property yoki metodlarni korinishi 3xil

   1) public -> barcha uchun ochiq bolgan qiymatlar;
   2) protected -> child class da xam korinadi, method singari qilib olish mumkin
   3) private -> shaxsiy faqat oziga korinadi, child classga korinmaydi va ishlatib bolmaydi
   3) privite va protected propertylarni parent classda public method berish yani gettter va setter qilib olish mumkin

   misol Admin panelda adminga tegishli xususiyatlar client uchun korinmagani kabi;
*/

class Car
{
    //attribute yoki property

    public $model;
    protected $year;
    private $km;

    //methodlar
    public function __construct($model, $year, $km)
    {
        $this->model = $model;
        $this->year = $year;
        $this->km = $km;
    }
    public function driving(){return ' driving';}
    public function setModel($model){$this->model = $model;}
    public function getYear(){return $this->year;}
    public function getKm(){return $this->km;}
}


$chevy = new Car('chevrolet', 2019, 300000);
$chevy->getYear(2019);

class ElectricCar extends Car{
    public function stop(){
        return true;
    }
    public function getYear(){return $this->year;}
}

$tesla = new ElectricCar('tesla', 2020, 1500);

echo $tesla->getYear();