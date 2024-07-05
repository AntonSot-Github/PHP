<?php

// Task 07
// Напишите функцию f07, которая принимает аргумент - массив, и возвращает массив после применения array_shift.

# write your code under this line

function f07($arr) {
    array_shift($arr);
    return $arr;
}

$a = [101, 102, 103, 104, 105];

$result = f07($a, 999);

print_r ($result);
