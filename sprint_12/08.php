<?php

// Task 08
// Напишите функцию f08, которая принимает аргумент - массив, и возвращает результат применения array_shift к массиву.

# write your code under this line

function f08($arr) {
    return array_shift($arr);
}

$a = [101, 102, 103, 104, 105];

$result = f08($a);

print_r ($result);//101
