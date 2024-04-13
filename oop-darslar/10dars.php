<?php

/*
    namespace doim php tagidan keyin yozish shart,
    2ta papkadagi bir xil nomli php filelarni ishlatishda xato bermaslik uchun qollaniladi

    qaysi papkadaligiga qarab <=> backslash -- \  <=> qoyib ishlatsa boladi
*/

require 'Html/Table.php';
require 'Kitchen/Table.php';

$table = new Kitchen\Table();
$table2 = new Html\Table();

var_dump($table);
var_dump($table2);

?>