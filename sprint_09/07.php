<?php

// Task 07
// Напишите функцию, которая получает строку как аргумент возвращает строку где исходная строка представлена в формате символ пробел. Например исходная 'abba' то возвращаем 'a b b a '. 

# write your code under this line

function f07($str){
    $out = '';
    for($i = 0; $i < strlen($str); $i++){
        $out .= $str[$i].' ';
    }
    return $out;
}




$res = f07('jedi knight');
echo ($res);