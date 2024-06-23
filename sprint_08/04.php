<?php

// Task 04
// Напишите функцию, которая  проверяет переданный ей аргумент на тип и возвращает:
// если аргумент целое число то строку 'integer'
// если аргумент дробное число то строку 'double'
// если аргумент строка то строку 'string'
// если аргумент булев то строку 'boolean'


$a = 77;

# write your code under this line

function f04($a){
    if (is_int($a)) return 'integer';
    elseif (is_float($a)) return 'double';
    elseif (is_string($a)) return 'string';
    elseif (is_bool($a)) return 'boolean';
}

$result = f04($a); 
echo ($result); 

echo "\n";

echo (f04(101));

echo "\n";

echo (f04(3.2));
