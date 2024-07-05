<?php

// Task 05
// Напишите функцию f05,которая принимает аргументы - массив и значение, и возвращает массив после применения array_unshift с указанным значением.

# write your code under this line

function f05($arr, $val) {
    array_unshift($arr, $val);
    return $arr;
}

$a = [101, 102, 103, 104, 105];

$result = f05($a, 999);

print_r ($result);
