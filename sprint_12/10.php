<?php

// Task 10
// Напишите функцию f10, которая принимает два аргумента. Массив и искомое число. И возвращает true если число есть в массиве или false если нет. Применяйте in_array. Сравнение - строгое.

# write your code under this line

function f10($arr, $foo) {
    return in_array($foo, $arr, true);
}

$a = [101, 102, 103, 104, 105];
$b = '103';

$result = f10($a, $b);

var_dump($result);

