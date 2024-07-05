<?php

// Task 11
// Напишите функцию f11, которая принимает два аргумента. Массив и переменную. Если значение из переменной есть в массиве, возвращает его индекс. Если нет - false. Сравнение не строгое.

# write your code under this line

function f11($arr, $foo) {
    return array_search($foo, $arr);
}

$a = [101, 102, 103, 104, 105];
$b = 103;

$result = f11($a, $b);

var_dump($result);
