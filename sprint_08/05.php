<?php

// Task 05
// Напишите функцию, которая проверяет является ли переданный ей аргумент четным. Если да, то возвращает true, в противном случае false. 
// Далее я не указываю имен, они видны в строке запуска.

$a = 77;

# write your code under this line

function f05($a){
    if ($a % 2 == 0) return true;
    else return false;
}

$res = f05($a); 
var_dump ($res); 