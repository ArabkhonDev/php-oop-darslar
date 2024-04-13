<?php

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