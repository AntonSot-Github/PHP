<?php

// Task 06
// Напишите функцию, которая проверяет является ли число $a не пустой строкой. Если не пустая строка - в переменную $res помещается данная строка. Если $a пустая, то в $res помещается false.

$a = 'mortal combat';
$res;

# write your code under this line

function f06(){
    global $a, $res;
    if ($a !== '') $res = $a;
    else $res = false;
}

f06(); // запуск для проверки
var_dump ($res); // помните почему тут var_dump?