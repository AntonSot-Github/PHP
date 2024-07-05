<?php

// Task 03
// Напишите функцию f03, которая принимает аргумент - массив, и возвращает результат применения array_pop к данному массиву.

# write your code under this line

function f03($arr) {
    return array_pop($arr);
}

$a = [101, 102, 103, 104, 105];

$result = f03($a);

echo ($result);//105
