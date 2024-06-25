<?php

// Task 05
// Напишите функцию, которая получает строку как аргумент и символ. Возвращает позицию последнего вхождения символа в строку. Для поиска применяйте strrpos.

# write your code under this line

function f05($str, $a){
    return strrpos($str, $a);
}



$res = f05('aaron sAmbuk', 'a');
echo ($res);