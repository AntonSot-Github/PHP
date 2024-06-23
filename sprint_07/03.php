<?php

// Task 03
// Напишите функцию, которая сравнивает переменные $a и $b и большее значение присваивает $c. Название функции f03.
$a = 7;
$b = 5;
$c = 0;

# write your code under this line

function f03(){
    global $a, $b, $c;
    if ($a > $b) $c = $a;
    else $c = $b; 
}

f03(); // запуск для проверки
echo ($c);