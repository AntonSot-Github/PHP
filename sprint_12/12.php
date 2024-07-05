<?php

// Task 12
// Напишите функцию f12,  которая принимает два аргумента. Массив и переменную. Если значение из переменной есть в массиве, возвращает его индекс. Если нет - false. Сравнение строгое.

# write your code under this line

function f12($arr, $foo) {
    return array_search($foo, $arr, true);
}

$a = ['Invisible War', 'Human Revolution', 'The Fall', 'Mankind Divided']; 
$f = 'The fall';

$result = f12($a, $f);

var_dump($result);
