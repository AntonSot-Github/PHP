<?php

// Task 09
// Напишите функцию, которая проверяет что переданная как аргумент строка содержит только цифры. Возвращает true, если условие выполнено и false в противном случае. 

$password = 'sN9j#(2sj';

# write your code under this line

function f09($password){
    return (ctype_digit($password)) ? true : false;
}

$result = f09($password); // запуск для проверки

var_dump($result);