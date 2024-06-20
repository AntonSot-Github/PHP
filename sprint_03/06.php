<?php

// Task 02
// Созданы переменные $a, $b. Создайте переменную $с куда поместите конкатенацию переменных $a, $b. Выведите $с в консоль. 
// Допвопрос - какой тип данных у $c? Как проверить тип данных?

$a = 2;
$b = 'best';

# write your code under this line

$c = $a.$b;

echo $c;
echo "\n";

echo gettype($c);//string
echo "\n";

var_dump(is_int($c));//bool(false)
var_dump(is_bool($c));//bool(false)
var_dump(is_float($c));//bool(false)
var_dump(is_string($c));//bool(true)
