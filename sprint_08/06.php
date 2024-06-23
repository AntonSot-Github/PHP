<?php

// Task 06
// Напишите функцию, которая получает строку как аргумент и проверяет что строка не равна пустой строке. Если переданная строка является пустой - возвращает 0. Если не пустой - возвращает саму строку.

$a = 'mortal combat';

# write your code under this line

function f06($a){
    if ($a == '') return 0;
    else return $a;
}


$result = f06($a); 
echo $result;