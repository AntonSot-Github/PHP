<?php

// Task 05
// Дана переменные $a, $b, $s. Напишите код (через if) который проверяет символ в переменной $s и если он равен:
// '+' то в переменную $result присваивается сумма $a + $b
// '-' то в переменную $result присваивается разность $a - $b
// '*' то в переменную $result присваивается произведение $a * $b
// выведите $result.

$a = 5;
$b = 6;
$s = '-';
$result;

if (strripos($s, "+") !== false) 
{
    $result = $a + $b;
}
elseif (strripos($s, "-")  !== false) 
{
    $result = $a - $b;
}
elseif (strripos($s, "*")  !== false){ 
$result = $a * $b;
}
echo $result; // -1
