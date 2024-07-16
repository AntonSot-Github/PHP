<?php
 
 // Первые несколько задач мы сделаем реально полезными и напишем хелперы (helpers) - функции, которые позволяют упростить работу с массивами. Более того, при дальнейшем изучении фреймворков вы обязательно столкнетесь с такими хелперами. 


// Task 07
// Напишем функцию arrayEveryString которая получает аргумент и имя функции для проверки. Проверяет, что каждая строка в массиве длиной 4 символа. Возвращает true / false. Проверка длины строки выполняется в callback6.


$db = ['dddd', 'cscs', 'prsr', 'cant'];

function arrayEveryString($arr, $call) {
    foreach ($arr as $item){
        if ($call($item) === false) return false;
    }
   return true; 
}

function callback6($item) {
    return strlen($item) == 4;
}

$result = arrayEveryString($db, 'callback6'); 
var_dump($result);
