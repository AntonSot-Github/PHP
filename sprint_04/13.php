<?php

// Task 13
// Переменная $name содержит имя пользователя. Напишите проверку, которая:
// Если имя пользователя не пустая строка - присваивает переменной $auth число 1
// Если пустая строка - присваивает переменной $auth число 2
// Если содержит только пробелы (в любом количестве) то присваивает переменной $auth число 3
// Выведите $auth.

$name = '   ';
$auth;

if ($name !== "" AND strripos($name, " ") == false) $auth = 1;
elseif ($name === "") $auth = 2;
elseif (strripos($name, " ") !== false) $auth = 3;
echo $auth, "\n";//3

//Решение без использования AND
if (strripos($name, " ") !== false) $auth = 3;
elseif ($name !== "") $auth = 1;
elseif ($name === "") $auth = 2;
echo $auth;//3