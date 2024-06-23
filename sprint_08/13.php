<?php

// Task 13
// Напишите функцию, которая возвращает результат выполнения функции test. 

function test() {
    return 100;
}

# write your code under this line

function f13(){
    return test();
}

$result = f13(); // запуск для проверки

echo ($result);