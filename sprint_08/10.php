<?php

// Task 10
// Напишите функцию, которая получает строку как аргумент и возвращает развернутую (реверсную) строку. Например, если аргумент 'abcde' то будет возвращена строка 'edcba'.

$a = 'avengers';

# write your code under this line

function f10($a){
    return strrev($a);
}

$result = f10($a); // запуск для проверки

echo ($result);