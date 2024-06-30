<?php

// Task 08
// Напишите функцию f08, которая получает массив как аргумент и возвращает cумму элементов массива.

# write your code under this line

function f08($arr){
    $sum = 0;
    foreach ($arr as $item){
        $sum += $item;
    }
    return $sum;
}

$foo = array (
    0 => 11,
    1 => 22,
    3 => 33
);

$out = f08($foo);

echo($out); // ожидаю 66
