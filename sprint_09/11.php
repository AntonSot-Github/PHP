<?php

// Task 11
// Напишите функцию, которая принимает строку и подстроку. Возвращает true если подстрока входит в строку, или false в обратном случае.

# write your code under this line

function f11($str, $a){
    return str_contains($str, $a);
}




$res = f11("Bumblebee", "bee");
var_dump ($res);