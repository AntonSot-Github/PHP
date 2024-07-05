<?php

// Task 02
// Напишите функцию f02, которая принимает два аргумента - массив и значение и возвращает результат применения array_push значения к массиву.


# write your code under this line

function f02($arr, $n) {
    return array_push($arr, $n);
}

$a = [101, 102, 103, 104, 105];

$result = f02($a, 77);

echo ($result);//6
