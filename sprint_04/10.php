<?php

// Task 10
// Переменная $code содержит телефонный код страны. Если код равен 
// '55' то в переменную $country присваивается строка 'brazil'
// '53' то в переменную $country присваивается строка 'cuba'
// '251' то в переменную $country присваивается строка 'ethiopia'
//  во всех остальных случаях то в переменную $country присваивается строка '0'
// Задачу решите через switch case.

$code = '55';
$country;

switch ($code){
    case 55:
        $country = 'brazil';
        break;
    case 53:
        $country = 'cuba';
        break;
    case 251:
        $country = 'ethiopia';
        break;
    default:
        $country = '0';
}
echo $country;
