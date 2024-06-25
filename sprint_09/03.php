<?php

// Task 03
// Напишите функцию, которая получает строку как аргумент и возвращает строку где первый символ преобразован к верхнему регистру. 

# write your code under this line

function f03($str){
    return ucfirst($str);
}




$res = f03('make a strings first character uppercase');
echo ($res);