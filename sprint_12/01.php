<?php

// Task 01
// Напишите функцию f01, которая принимает два аргумента - массив и значение и возвращает массив с добавленным элементом.
// Добавление производить c помощью array_push.

# write your code under this line

function f01($arr, $n) {
    array_push($arr, $n);
    return $arr;
}

$a = [11, 22, 33, 44, 55];

$result = f01($a, 77);

print_r($result);
