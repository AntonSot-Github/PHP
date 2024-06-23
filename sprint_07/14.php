<?php

// Task 14
// Напишите функцию, которая генерирует случайное целое число от 0 до 100 включительно и присваивает в переменную $res.

$res;

# write your code under this line

function f14(){
    global $res;
    $res = random_int(0, 100);
}

f14(); // запуск для проверки

echo ($res);


