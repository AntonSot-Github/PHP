<?php

// Task 14
// Напишите функцию f14, которая получает массив как аргумент и возвращает новый массив, который будет реверсным по отношению к исходному.
# write your code under this line

function f14($arr){
   foreach ($arr as $item){
    $newArr = array_reverse($arr);
   }
   return $newArr;
}

$bar = [999, 888, 777, 666, 555];

$mas = f14($bar);

print_r($mas); // ожидаю [555, 666,777, 888, 999]
