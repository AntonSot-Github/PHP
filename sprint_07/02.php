<?php

// Task 02
// Напишите функцию f02, которая округляет значение $a с помощью round, а результат помещает в $result. Выведите $result.

$a = 7.55;
$result;

# write your code under this line

function f02(){
    global $a, $result;
    $result = round($a);
}


f02(); // запуск для проверки
echo ($result);