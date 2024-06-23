<?php

// Task 03
// Напишите функцию, которая сравнивает переменные $a и $b переданные как аргументы в функцию и возвращает большее число.
$a = 7;
$b = 5;

# write your code under this line

function f03($a, $b){
    if ($a < $b) return $b;
    else return $a;
}

$max = f03($b, $a); 
echo ($max);

echo "\n";

$max = f03(24, 77); 
echo ($max);