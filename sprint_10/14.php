<?php

// Task 14
// Напишите функцию f14, которая возвращает строку.  Cтроку которая будучи выведена в консоль выглядит так:
/*

____4
___34
__234
_1234

*/
// Реализуйте вложенными циклами.

# write your code under this line

function f14(){
    $str = "";
    $acc = "";
    for ($k = 4; $k > 0; $k--){
        for ($i = $k; $i > 0; $i--){
            $str .= "_";
        }
        $str .= $k.$acc."\n";
        $acc = $k.$acc;
    }
    return $str;
}


$res = f14();
echo ($res);
