<?php

// Task 04
// Напишите функцию f04, которая возвращает строку. Функция принимает аргумент, который определяет количество звездочек. Допустим запускаем функцию с аргументом f04(5) то строка будучи выведена в консоль выглядит так:
/*
1_*****
2_*****
3_*****
*/
// Если запустить функцию так f04(9) то возвратиться строка вида:
/*
1_*********
2_*********
3_*********
*/

// Реализуйте вложенными циклами.

# write your code under this line

function f04($s){
    $str = "";
    for ($k = 1; $k <= 3; $k++){
        $str .= $k."_";
        for ($i = 0; $i < $s; $i++){
        $str .= "*";
        }
        $str .= "\n";
    }
    return $str;
}


$res = f04(6);
echo ($res);
var_dump($res);