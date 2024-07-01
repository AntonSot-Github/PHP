<?php

// Task 13
// Напишите функцию f13, которая получает массив как аргумент и возвращает новый массив, который состоит из чисел входящего массива.
# write your code under this line

function f13($arr){
   $newArr = [];
   foreach ($arr as $item) {
    if (is_int($item)) array_push($newArr, $item);
   }
   return $newArr;
}

$bar = ['4', 5, 'hello', 7, 'best', 9, 11];

$out = f13($bar);

print_r($out); // ожидаю [5, 7, 9, 11]
