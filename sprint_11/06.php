<?php

// Task 06
// Напишите функцию f06, которая получает массив как аргумент и возвращает строку - все элементы массива через нижнее подчеркивание.

# write your code under this line


function f06($arr){
    $str = "";
    foreach($arr as $item){
        $str .= $item."_";
    }
    return $str;
}

$foo = [44, 55, 77, 88];

$out = f06($foo);

echo($out); // ожидаю 44_55_77_88_
