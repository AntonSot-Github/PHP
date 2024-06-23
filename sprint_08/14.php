<?php

// Task 14
// Напишите функцию f14, которая принимает аргумент или 1 или 2 и в зависимости от этого возвращает результат выполнения функции one(), или функции two().

function one() {
    return 'one';
}
function two() {
    return 'two';
}

# write your code under this line

function f14($a){
    if ($a == 1) return one();
    elseif ($a == 2) return two();
}

$result = f14(1); // запуск для проверки

echo ($result);