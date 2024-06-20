<?php

// Task 09
// Переменная $code содержит телефонный код страны. Если код равен 
// '55' то в переменную $country присваивается строка 'brazil'
// '53' то  в переменную $country присваивается строка  'cuba'
// '251' то  в переменную $country присваивается строка  'ethiopia'
// Задачу решите через if
// Выведите $country.

$code = '53';
$country;

if (strripos($code, '55') !== false) $country = 'brazil';
elseif (strripos($code, '53') !== false) $country = 'cuba';
elseif (strripos($code, '251') !== false) $country = 'ethiopia';
echo $country, "\n"; //cuba

// Другое решение
if ($code == 55) $country = 'brazil';
if ($code == 53) $country = 'cuba';
if ($code == 251) $country = 'ethiopia';
echo $country, "\n"; //cuba
