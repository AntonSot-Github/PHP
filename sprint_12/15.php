<?php

// Task 15
// Напишите функцию f15, которая получает аргумент массив и с помощью array_map создает и возвращает новый массив где все числа больше 50 заменены на 0. В качестве callback функции для array_map используйтe функцию t15.

# write your code under this line

function t15($item) {
    return ($item > 50) ? 0 : $item;
}

function f15($arr) {
    return $newArr = array_map("t15", $arr);
}

$a = [22, -33, -22, 33, 44, -55, -66, 66, 99]; 

$result = f15($a);

print_r($result);
