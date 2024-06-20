<?php

// Task 06
// Дана переменные $a, $b, $s. Напишите код который проверяет символ в переменной $s и если он равен:
// '+' то в переменную $result присваивается сумма $a + $b
// '-' то в переменную $result присваивается разность $a - $b
// '*' то в переменную $result присваивается произведение $a * $b
// '/' и $b не равен нулю - то в переменную $result присваивается частное $a / $b
// выведите $result.

$a = 9;
$b = 2;
$s = '/';
$result;

if (strripos($s, '+') !== false) $result = $a + $b;
elseif (strripos($s, '-') !== false) $result = $a - $b;
elseif (strripos($s, '*') !== false) $result = $a * $b;
elseif (strripos($s, '/') !== false AND $b !== 0) $result = $a / $b;
echo $result; // 4.5

