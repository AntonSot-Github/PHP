<?php

// Task 11
// Напишите функцию, которая получает аргумент или 'even' или 'odd' и в зависимости от аргумента возвращает случайное четное или случайное не четное число в пределах от 0 до 100.

$a = 'even';

# write your code under this line

function f11 ($a){
    $num = rand(0, 100);
    if ($a == 'even' && $num % 2 == 0) return $num;
    elseif ($a == 'even' && $num % 2 != 0) return $num - 1;    
    elseif ($a == 'odd' && $num % 2 != 0)return $num;
    elseif($a == 'odd' && $num % 2 == 0) return $num + 1;
}

$result = f11($a); // запуск для проверки

echo ($result);
