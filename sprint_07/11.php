<?php

// Task 11
// Напишите функцию, которая берет число из переменной $size и записывает в $result строку вида:
// если $size меньше 999 то в $result записываем символ 'B'
// если $size больше 1000 и меньше 999 999 то в $result записываем символ 'kB'
// если $size больше 1 000 000  то в $result записываем символ 'MB'



$size = 12235;
$result;

# write your code under this line

function f11(){
    global $size, $result;
    if ($size <= 999) $result = 'B';
    elseif ($size >= 1000 && $size <= 999999) $result = 'kB';    
    elseif ($size >= 1000000) $result = 'MB';
}

f11(); // запуск для проверки

echo ($result);