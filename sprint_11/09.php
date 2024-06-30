<?php

// Task 09
// Напишите функцию f09, которая получает массив как аргумент и возвращает cумму элементов массива, которые больше нуля.

# write your code under this line

function f09($arr){
    $sum = 0;
    foreach ($arr as $item){
        if ($item > 0) $sum += $item;
    }
    return $sum;
}

$foo = array (
    0 => 11,
    1 => -22,
    3 => 33,
    10 => -500,
    11 => 501,
    12 => -502,
    13 => 503
);

$out = f09($foo);

echo($out); // ожидаю 1048
