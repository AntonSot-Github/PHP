<?php

// Task 14
// Дана переменная $limit.  С помощью цикла cуммируйте числа от 0 до тех пор пока сумма не станет равной или большей $limit. После чего остановите цикл. Сумму - выведите. Сумма накапливается в переменной $s. Решите с помощью while.
// Например $limit = 12. Код должен суммировать 0 + 1 + 2 + 3 + 4 + 5 и остановиться. Сумма $s будет равной 15.


$limit = 79;
$s = 0;

# write your code under this line

$i = 0;
while ($s <= $limit) {    
    $s = $s + $i;
    $i++;
}
echo $s; //91