<?php

// Task 06
// Напишите функцию f06, которая принимает аргументы - массив и значение, и возвращает результат применения array_unshift к массиву с указанным значением.

# write your code under this line

function f06($arr, $val) {
    return array_unshift($arr, $val);
}

$a = [101, 102, 103, 104, 105];

$result = f06($a, 999);

print_r ($result);//6
