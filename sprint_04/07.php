<?php

// Task 07
// Дана переменные $a, $b, $s. Напишите код через (switch case), который проверяет символ в переменной $s и если он равен:
// '+' то в переменную $result присваивается  сумма $a + $b
// '-' то в переменную $result присваивается  разность $a - $b
// '*' то в переменную $result присваивается  произведение $a * $b
// '/'  то в переменную $result присваивается  частное $a / $b
// выведите $result.

$a = 9;
$b = 2;
$s = '*';
$result;

switch ($s){
    case '+':
        $result = $a + $b;
        break;
    case '-':
        $result = $a - $b;
        break;
    case '*':
        $result = $a * $b;
        break;
    case '/':
        $result = $a / $b;
        break;    
}
echo $result, "\n"; //18

//Другое решение задания
switch (true){
    case strripos($s, '+'):
        $result = $a + $b;
        break;
    case strripos($s, '-'):
        $result = $a - $b;
        break;
    case strripos($s, '*'):
        $result = $a * $b;
        break;
    case strripos($s, '/'):
        $result = $a / $b;
        break;    
}
echo $result; //18