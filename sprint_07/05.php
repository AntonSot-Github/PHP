<?php

// Task 05
// Напишите функцию f05, которая проверяет является ли число $a четным. Если да то в переменную $res помещает true, в противном случае false. 
// Далее я не указываю имен, они видны в строке запуска.

$a = 77;
$res;

# write your code under this line

function f05() {
    global $a, $res;
    if ($a % 2 == 0) $res = true;
    else $res = false;
}

f05(); // запуск для проверки
var_dump ($res); // помните почему тут var_dump?