<?php

// Task 13
// Еще раз пересмотрите таск 11 и 12, перед выполнением данной задачи. Напишите функцию, которая берет из переменной $size число и если: 
// число от 0 до 999 то в $res приваивает строку, где к данному числу добавлен символ 'B'
// число от 1000 до 999 999 то в $res приваивает строку, где к тысячной части числа добавлен символ 'kB'
// число от больше 999 999 то в $res приваивает строку, где к миллионной части числа добавлен символ 'MB'

// Например:
// $size = 555 то $res = '555B'
// $size = 34555 то $res = '34kB'
// $size = 74834555 то $res = '74MB'

$size = 5634;
$res;

# write your code under this line

function f13(){
    global $size, $res;
    if ($size >= 0 && $size <= 999) $res = strval($size).'B';
    elseif ($size >= 1000 && $size <= 999999) $res = strval($size).'kB';
    elseif ($size > 999999) $res = strval($size).'MB';
}

f13(); // запуск для проверки

echo ($res);