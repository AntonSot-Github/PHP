<?php

// Task 09
// Напишите функцию, которая принимает строку как аргумент, и очищает от пробелов (начало и конец строки) и экранирует строку с помощью слешей. Применяйте addslashes. 

# write your code under this line

function f09($str){
    return addslashes(trim($str));
}




$res = f09("  Dinobots' choice of form   ");
echo ($res);