<?php

// Task 07
// Напишите функцию, которая очищает начало и конец строки $a от пробелов. Результат помещает в $res.
// например $a = 'abba    '; в $res = 'abba'
// например $a = '   abba    '; в $res = 'abba'
// например $a = 'ab ba'; в $res = 'ab ba'

$a = 'mortal combat  ';
$res;

# write your code under this line

function f07(){
    global $a, $res;
    $res = trim($a);
}

f07(); // запуск для проверки

var_dump($a);
var_dump ($res); // помните почему тут var_dump?