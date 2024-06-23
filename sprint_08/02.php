<?php

// Task 02
// Напишите функцию, которая суммирует переменные $a и $b переданные как аргументы и возвращает результат. Название функции f02.

$a = 7;
$b = 5;

# write your code under this line


function f02($a, $b){
    return $a + $b;
}


$c = f02($a, $b); 
echo ($c);

echo "\n";

$c = f02($b, $b); 
echo ($c);