<?php


/*
    clone qilish bunda 1ta variable qiymatini boshqa variablega kopiya qilish kabi boladi.

    1)  clone sozi orqali yasaladi
    2) alohida object yaratiladi va qiymatini saqlaydi. refrence saqlaydi clone qilinganda
    3) clone soz ishlatilmasa yangi variable refrence saqlamaydi va garbage kollection ishlaydi.

*/
// 1)

$test = "aaa";

$test2 = $test;

// 2)

$app = 'mevalar uchun project';

$app2 = clone $app;