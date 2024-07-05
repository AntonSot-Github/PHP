<?php

// Task 09
// Напишите функцию f09, которая принимает два аргумента. Массив и искомое число. И возвращает true если число есть в массиве или false если нет. Применяйте in_array. Сравнение - не строгое.

# write your code under this line

function f09($arr, $foo) {
    return in_array($foo, $arr);
}

$a = [101, 102, 103, 104, 105];
$b = 103;

$result = f09($a, $b);

var_dump($result);
