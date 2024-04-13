<?php
/*
    Traitlar bir xil funksiyalr takrorlanishini oldini olish uchun ishlatiladi
    va trait sozi bilan yasaladi.

    ----------------------------------------------------------------

    1ta child class faqat bita perent classdan foydalanishi mumkin 
    va boshqa classdan inheritance qilib bolmaydi. 
    1) Bizga shu yerda traitlar yordamga kelib, 
    2) boshqa clasdagi xususiyatlarni alohida va oxshash bolgan traitga yozib 
    3) keyin uni kerakli classda chaqirib ishlatish mumkin.

    yani bir payt ozida 2ta klassdan inheritance yoki extends qilib bolmaydi. Trait shunga yordam qiladi
    bir apytda 2 va undan ortiq traitlardan foydalanish mumkin.

    <=> use AnimalTrait, BirdTrait, FishTrait, QumurqaTrait <=>
    
*/

trait AnimalTrait{
    public function eat(){
        return 'eating meat';
    }
}

interface Animal {
    public function makeSound();
}


class Dog implements Animal{
    public function makeSound(){
        return 'Vov Vov';
    }
    use AnimalTrait;
}

class Cat implements Animal{
    public function makeSound(){
        return 'Vov Vov';
    }
    use AnimalTrait;
}