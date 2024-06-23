<?php

// Task 12
// Напишите функцию, которая берет число из переменной $num1 дробь и записывает в $num2 целую часть данной дроби. Для получения целой части дроби применяйте intval().

$num1 = 56.34;
$num2;

# write your code under this line

function f12(){
    global $num1, $num2;
    $num2 = intval($num1);
}

f12(); // запуск для проверки

echo ($num2);