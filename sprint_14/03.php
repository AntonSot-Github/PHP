<?php
 
 // Первые несколько задач мы сделаем реально полезными и напишем хелперы (helpers) - функции, которые позволяют упростить работу с массивами. Более того, при дальнейшем изучении фреймворков вы обязательно столкнетесь с такими хелперами. 


// Task 03
// Напишем функцию getColumnName которая создает и возвращает массив вида:
// Array
// (
//     ["1b7b"] => Mary
//     ["412a"] => Wade
//     ["dc77"] => Dave
//     ["516b"] => Riley
// )

$db = array (
    "1b7b" => array ("name" => 'Mary', "age" => 24),
    "412a" => array ("name" => 'Wade', "age" => 21),
    "dc77" => array ("name" => 'Dave', "age" => 25),
    "516b" => array ("name" => 'Riley', "age" => 22),
);

function getColumnName($arr) {
}

$result = getColumnName($db); 
print_r($result);
