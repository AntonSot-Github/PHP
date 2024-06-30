<?php

// Task 03
// Напишите функцию f03, которая получает массив как аргумент и возвращает его длину.

# write your code under this line


function f03($arr){
  return count($arr);
}

$foo = [11, 22, 33, 44, 55, 77, 88];

$arrayLength = f03($foo);

echo($arrayLength);
