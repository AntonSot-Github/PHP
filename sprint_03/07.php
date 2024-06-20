<?php

// Task 07
// Созданы переменные $a, $b. Создайте переменную $с куда поместите cумму длин строк в переменных $a, $b. Выведите $с в консоль. 
// Допвопрос - какой тип данных у $c? Как проверить тип данных?

$a = 'homealone';
$b = 'best';

# write your code under this line

$c = strlen($a) + strlen($b);

echo $c;
echo "\n";

echo gettype($c);//integer
echo "\n";

var_dump(is_int($c));//bool(true)
var_dump(is_bool($c));//bool(false)
var_dump(is_float($c));//bool(false)
var_dump(is_string($c));//bool(false)
