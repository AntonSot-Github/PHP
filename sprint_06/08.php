<?php

// Task 08
// Дана переменная $n. Сформируйте строку $out в которой будут числа от нуля (включительно) до $n (включительно). Причем числа 3, 7, 11 пропущены. Решите с while.
// Например, если $n равен 9 то в $out должна быть строка '0_1_2_4_5_6_8_9_' 
// Если $n равен 13 то в $out должна быть строка '0_1_2_4_5_6_8_9_10_12_13_'

$n = 12;
$out = '';

# write your code under this line

$i = 0;
while ($i <= $n) {
    if ($i != 3 && $i % 4 != 3) $out .= $i.'_';    
    $i++;
}
echo $out; //0_1_2_4_5_6_8_9_10_12_