<?php

// Task 06
// Напишите функцию, которая получает строку как аргумент и символ (или 'U' или 'L'). Если символ U, то возвращает строку преобразованную к верхнему регистру. Если L - к нижнему.

# write your code under this line

function f06($str, $a){
    if ($a == 'U') return strtoupper($str);
    elseif ($a == 'L') return strtolower($str);
}




$res = f06('EvEnT HoRiZoN', 'L');
echo ($res);