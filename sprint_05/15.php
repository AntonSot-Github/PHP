<?php

// Task 15
// Дана переменная $n. С помощью цикла найдите произведение чисел от 1 (включительно) до $n (включительно) чисел. Произведение должно быть в переменной $p. Если $p становится больше 2000 прервать цикл. Выведите $p.
// Например $n = 4. Нужно найти произведение 1*2*3*4
// Например $n = 20. Нужно находить произведение 1*2*3*4*5*6*7 потому что полученное число больше 2000. В $p записать полученный результат.


$n = 17;
$p = 1;

for ($i = 1; $i < $n; $i++){    
    $p *= $i;
    if ($p > 2000) break;
}
echo $p; // 5040