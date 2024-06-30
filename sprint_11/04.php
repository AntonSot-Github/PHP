<?php

// Task 04
// Напишите функцию f04, которая получает массив как аргумент и возвращает его длину.

# write your code under this line


function f04($arr){
    return count($arr);
}

$foo = array (
    0 => 11,
    1 => 22,
    3 => 33,
    4 => 44,
    5 => 55,
    6 => 66
);

$arrayLength = f04($foo);

echo($arrayLength);
