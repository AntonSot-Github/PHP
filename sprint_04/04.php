<?php

// Task 04
// Дана переменная $foo. Напишите условие if такое, что если $foo:
// больше нуля и меньше 10 то $result = 1
// больше или равно 10 и меньше 20 то $result = 2
// больше или равно 20 и меньше или равно 30 то  $result = 3
// в противном случае  $result = 0
// выведите $result;

$foo = 5;
$result;

if ($foo > 0 AND $foo < 10) $result = 1;
elseif ($foo >= 10 AND $foo < 20) $result = 2;
elseif ($foo >= 20 AND $foo <= 30) $result = 3;
else $result = 0;

echo $result, "\n";//1
