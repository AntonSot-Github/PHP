<?php

// Task 10
// Напишите функцию f10, которая получает массив как аргумент и возвращает минимальный элемент массива.
# write your code under this line

function f10($arr){
   $min = $arr[0];
   foreach ($arr as $item){
    if ($min > $item) $min = $item;
   }
   return $min;
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

$out = f10($foo);

echo($out); // ожидаю -502
