<?php

// Task 04
// Напишите функцию f04, которая принимает аргумент - массив, и возвращает массив после применения array_pop.

# write your code under this line

function f04($arr) {
    array_pop($arr);
    return $arr;
}

$a = [101, 102, 103, 104, 105];

$result = f04($a);

print_r ($result);
