<?php

// Task 08
// Напишите функцию f08, которая проверяет, что в $a и $b - целые числа. Если условие выполняется, то переменной $result присвойте true. Если нет - false. Под целым числом понимаем integer. Проверка типа - через is_int.

$a = 12;
$b = 8;
$result;

# write your code under this line

function f08(){
    global $a, $b, $result;
    if (is_int($a) && is_int($b)) $result = true;
    else $result = false;
}

f08(); // запуск для проверки

var_dump($result);