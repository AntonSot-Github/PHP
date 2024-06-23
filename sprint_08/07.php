<?php

// Task 07
// Напишите функцию, которая получает строку как аргумент и возвращает ее очищенную от пробелов (удаляет пробелы в начале и в конце строки).

$a = ' mortal combat  ';

# write your code under this line

function f07($a){
    return trim($a);
}

$r = f07($a); // запуск для проверки

var_dump($r);