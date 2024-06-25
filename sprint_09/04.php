<?php

// Task 04
// Напишите функцию, которая получает строку как аргумент и символ. Возвращает позицию последнего вхождения символа в строку. Для поиска применяйте strripos.

# write your code under this line

function f04($str, $a){
    return strripos($str, $a);
}




$res = f04('aaron sAmbuk', 'a');
echo ($res);
