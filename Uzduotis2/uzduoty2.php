<?php

$variableToDebug = 15;
var_dump($variableToDebug);
echo PHP_EOL;

$array = [ "Hello", "Learning", "Amazing", "CodeAcademy", "Php", "Git"];
 //echo $array;
print_r($array);

$variable1 = false;
$variable2 = true;
$variable3 = '2022 year';

var_dump($variable1);
var_dump((int)$variable1);
var_dump($variable2);
var_dump((int)$variable2);
var_dump($variable3);
var_dump((int)$variable3);

$variable4 = 150;
$variable5 = [];
$variable6 = 'Year - 2022';

var_dump($variable4);
var_dump((bool)$variable4);
var_dump($variable5);
var_dump((bool)$variable5);
var_dump($variable6);
var_dump((bool)$variable6);

$variable7 = 145;
$variable8 = '145';
$variable9 = '150';
$variable10 = 150;

var_dump($variable7 || $variable8);
var_dump($variable10 && !$variable9);

$one = 143 * 444;
$two = 657 / 12;
$three  = 578 % 55;
$four = 6 ** 5;
$five = 5;
$five++;
$six = 6;
$six--;

var_dump($one, $two, $three, $four, $five, $six);

 var_dump(56 > 77);
 var_dump(190 <= 230);
 var_dump(230 == '230');
 var_dump(45 != '45');

$variable = 10;
 var_dump(isset($variable)); //patikrina ar yra toks kintamasi, jei yra grazina true,
// nera false

 var_dump($variabe0);




