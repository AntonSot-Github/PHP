<?php

// Task 05
// Дана переменная $n1 и $n2. Сформируйте строку $out в которой будут числа от $n1 (включительно) до $n2(включительно). Разделитель - пробел. Вывести результат. 
// Например, если $n1 равен 50 а $n2 равен 55 то в $out должна быть строка '50 51 52 53 54 55 ' 

$n1= 69;
$n2 = 76;
$out = '';

for ($i = $n1; $i <= $n2; $i++) {
    $out .= $i.' ';
}
echo $out; //69 70 71 72 73 74 75 76 

