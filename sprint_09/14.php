<?php

// Task 14
// Напишите функцию f14, которая принимает аргумент строку $str, и подстроку $s1 и $s2. Функция возвращает строку $str где все подстроки $s1 заменены на $s2. Применяйте srt_replace. 


function f14($str, $s1, $s2){
    return str_replace($s1, $s2, $str);
}

$res = f14('Transformers Universe', 'er', '00');
echo $res;