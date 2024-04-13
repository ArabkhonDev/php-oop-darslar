<?php

spl_autoload_register(function ($class_name){
    include 'oop-darslar/classes'. $class_name . '.php';
});