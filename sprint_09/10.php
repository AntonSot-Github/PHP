<?php

// Task 10
// Напишите функцию, которая принимает строку как аргумент, и преобразует специальные символы HTML в сущности. Применяйте htmlspecialchars. Возвратите результат.

# write your code under this line

function f10($str){
    return htmlspecialchars($str);
}



$res = f10("<p>Hello world</p>");
echo ($res);