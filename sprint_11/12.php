<?php

// Task 12
// Напишите функцию f12, которая получает массив как аргумент и возвращает новый массив, который состоит из четных элементов входящего массива.
# write your code under this line

function f12($arr){
   $newArr = [];
   foreach ($arr as $item){
    if ($item % 2 == 0) array_push($newArr, $item);
   }
   return $newArr;
}

$bar = array (
    0 => 11,
    1 => -22,
    3 => 33,
    10 => -500,
    11 => 501,
    12 => -502,
    13 => 503
);

$out = f12($bar);

print_r($out); // ожидаю (0 => -22, 1 => -500, 2 => -502)
