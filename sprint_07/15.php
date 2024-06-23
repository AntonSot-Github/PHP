<?php

// Task 15
// Напишите функцию, которая генерирует случайное целое число от 150 до 200 включительно и присваивает в переменную $res значение 2 если число четное, и 1 если не четное.

$res;

# write your code under this line

function f15(){
    global $res;
    $random = random_int(150, 200);
    $random % 2 == 0 ? $res = 2 : $res = 1; 
}

f15(); // запуск для проверки

echo ($res);