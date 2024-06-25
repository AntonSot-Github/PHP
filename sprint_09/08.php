<?php

// Task 08
// Напишите функцию, которая получает строку как аргумент возвращает строку c символами исходной строки, находящимися на четных позициях. Т.е. исходная строка 'fallen' возвращаем 'fle'

# write your code under this line

function f08($str){
    $out = '';
    for($i = 0; $i < strlen($str); $i++){
        if($i % 2 == 0) $out .= $str[$i];
        else continue;
    }
    return $out;
}




$res = f08('optimus prime');
echo ($res);