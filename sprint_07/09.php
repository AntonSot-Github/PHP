<?php

// Task 09
// Напишите функцию, которая проверяет длину $password. Если больше 8 символов в $result кладет 1, если меньше 0.

$password = 'sN9j#(2sj';
$result;

# write your code under this line

function f09(){
    global $password, $result;
    if (strlen($password) > 8) $result = 1;
    else $result = 0;
}

f09(); // запуск для проверки

echo ($result);