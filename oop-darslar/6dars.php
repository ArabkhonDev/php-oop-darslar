<?php
/*
    Interface classlar bu abstract class bilan birxil, yani yaratilinayotgan classda nimalar bolish kkligi yoziladi va <=> Interface <=> kalit sozi bn yasaladi
    -----------------------------------------------------
    interface da faqat tanasi yoziladi, faqat methodlardan tashkil topgan boladi

    public function boladi, private va protected mumkin emas.
    ----------------------------------------------------
    implement sozi orqali interfase ishlatish mumkin. extends sozi bilan ishlata olmaymiz.


*/

interface Animal {
    public function makeSound();
    public function eat();
}

class Dog implements Animal{
    public function makeSound(){
        return 'Vov Vov';
    }
    public function eat(){
        return 'eating meat';
    }

}

class Cat implements Animal{
    public function makeSound(){
        return 'Vov Vov';
    }
    public function eat(){
        return 'eating wiss kiss';
    }
}