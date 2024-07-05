<?php

// Task 13
// Напишите функцию f13, которая принимает массив и возвращает копию исходного массива очищенного от дублирующихся значений. Применяйте array_unique.

# write your code under this line

function f13($arr) {
    return $newArr = array_unique($arr);
}

$a = [22, 33, 22, 33, 44, 55, 66, 66, 99]; 

$result = f13($a);

print_r($result);
