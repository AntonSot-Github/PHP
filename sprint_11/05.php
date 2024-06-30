<?php

// Task 05
// Напишите функцию f05, которая получает массив как аргумент и возвращает его длину.

# write your code under this line

function f05($arr){
    return count($arr);
}

$foo = array (
    0 => 11,
    1 => 22,
    3 => 33,
    10 => 500,
    11 => 501,
    12 => 502,
    13 => 503
);

$arrayLength = f05($foo);

echo($arrayLength);
