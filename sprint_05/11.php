<?php

// Task 11
// Дана переменная $n. Сформируйте строку $out в которой выводится следующий код 0_**_1_*_2_**_3_*_ т.е. выводится номер итерации 0 1 2 3 и т.д, если итерация четная то добавляется _**_, если нечетная то _*_ . Конечное выводимое число определяется $n (включительно).
// Например $n = 5, то в $out должна быть строка 0_**_1_*_2_**_3_*_4_**_5_*_

$n = 2;
$out = '';

for ($i = 0; $i <= $n; $i++) {
    if ($i % 2 == 0) $out .= $i.'_**_';    
    else $out .= $i.'_*_';
}
echo $out; //0_**_1_*_2_**_
