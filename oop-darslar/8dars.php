<?php

/*
    Static methods va property

    1) static sozi bilan yasaladi,
    2) oddiy va static funksiya va methodlarni farqi, oddiy property ishlatish uchun classdan object olib keyin propertyga qiymat berib ishlatish kk.
    3) static funcsilarda esa alohida yangi object yaratmasdan xam ishlatsa boladi 
    4) static funksiyalarda <=> $this <=> kalit soz ishlatib bolmaydi yani object bu funksiyalarni,  parent klasiga oid propertyni ishlata olmaydi.
    5) klass ichida static funksiyalarni <=> self<=> orqali ishlati mumkin. <=> misol -> self::eat <=>
    6) child classlarda statik funksiya va propertylarni <=> parent <=> qilib chaqirib ishlatish mumkin 

*/

class Dog{
    public $name;
    public static $weight;

    public function bark(){
        return 'Vov Vov';
    }

    public static function eat(){
        return 'Eating meat';
    }
}


class Tezer extends Dog{

}
echo Tezer::eat();

echo Dog::eat();