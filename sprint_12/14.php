<?php

// Task 14
// Напишите функцию f14, которая получает аргумент массив и с помощью array_filter создает и возвращает новый массив где содержатся только четные числа. В качестве callback функции для array_filter используйтe функцию t14.

# write your code under this line

function t14($item) {
    return $item % 2 === 0;
}

function f14($arr) {
    return $newArr = array_filter($arr, "t14");
}

$a = [22, -33, -22, 33, 44, -55, -66, 66, 99]; 

$result = f14($a);

print_r($result);
