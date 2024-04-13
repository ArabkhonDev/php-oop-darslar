<?php
/*
    agar yuklanadigan Class filelar kopayib ketadigan bolasa xar birini alohida qol bilan yozib chiqish kk.
    shunda php yanada osonlik bolsin deb autoload xolatni ishlatish uchun alohida funksiya ishlab chiqgan
    
    shu funksiya qancha Class funksiya yaratilsa xam ozi avtomotik yuklayveradi.
    spl_autoload_register(function ($class_name){include 'oop-darslar/classes'. $class_name . '.php';});
    
    100ta fileni require qilib yozgandan kora 1 qator funksiya yozib yuklagan yaxshi
    
    
    */
    spl_autoload_register(function ($class_name){include 'oop-darslar/classes'. $class_name . '.php';});

require_once 'autoload.php';
