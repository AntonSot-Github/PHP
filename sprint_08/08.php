<?php

// Task 08
// Напишите функцию, которая принимает два аргумента, $password и $email и возвращает true, если длина пароля больше 8 символов, а email не пустая строка. Или возвращает false в противном случае. 

$p = 'pupkin1193';
$e = 'haker_mamkin@mail.ua';

# write your code under this line

function f08($p, $e){
    if(strlen($p) > 8 && $e != '') return true;
    else return false;
}

$result = f08($p, $e); // запуск для проверки

var_dump($result);