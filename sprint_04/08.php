<?php

// Task 08
// Переменная $address может содержать строки 'http' или 'https' или '@' или 'ftp'. Напишите код, который проверяет что если в переменной $address лежит
// 'http' или 'https' то в переменную $protocol присваивается строка 'url'
// '@' то в переменную $protocol присваивается строка 'email'
// 'ftp' то в переменную $protocol присваивается строка 'ftp'
// Задачу решите через switch case. Выведите $protocol.

$address = '@';
$protocol;

switch ($address){
    case 'http':
        $protocol = 'url';
        break;
    case 'https':
        $protocol = 'url';
        break;
    case '@':
        $protocol = 'email';
        break;
    case 'ftp':
        $protocol = 'ftp';
        break;
}
echo $protocol, "\n"; // email

//Другое решение задания
switch (true){
    case strripos($address, 'http'):
        $protocol = 'url';
        break;
    case strripos($address, 'https'):
        $protocol = 'url';
        break;
    case strripos($address, '@'):
        $protocol = 'email';
        break;
    case strripos($address, 'ftp'):
        $protocol = 'ftp';
        break;
}
echo $protocol; // email