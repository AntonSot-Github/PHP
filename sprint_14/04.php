<?php
 
 // Первые несколько задач мы сделаем реально полезными и напишем хелперы (helpers) - функции, которые позволяют упростить работу с массивами. Более того, при дальнейшем изучении фреймворков вы обязательно столкнетесь с такими хелперами. 


// Task 04
// Напишем функцию getColumn которая получает аргумент и имя поля. Возращает массив с ключами исходного массива и данними из указанного поля. Например при запуске getColumn($db, 'name') возвратит:
// Array
// (
//     ["1b7b"] => Mary
//     ["412a"] => Wade
//     ["dc77"] => Dave
//     ["516b"] => Riley
// )
// При запуске getColumn($db, 'age') возратит:
// (
//     ["1b7b"] => 24
//     ["412a"] => 21
//     ["dc77"] => 25
//     ["516b"] => 22
// )

$db = array (
    "1b7b" => array ("name" => 'Mary', "age" => 24),
    "412a" => array ("name" => 'Wade', "age" => 21),
    "dc77" => array ("name" => 'Dave', "age" => 25),
    "516b" => array ("name" => 'Riley', "age" => 22),
);


function getColumn($arr, $field) {
    $result = [];
    foreach ($arr as $index => $item) {
        $result[$index] = $item[$field];
    }
    return $result;
}

$result = getColumn($db, 'name'); 
print_r($result);
