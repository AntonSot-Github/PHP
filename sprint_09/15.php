<?php

// Task 15
// Напишите функцию f15, которая принимает аргумент строку $str и возвращает ее очищенной от тегов HTML. Применяйте strip_tags.

function f15($str){
    return strip_tags($str);
}


$res = f15("<p>He appears in-game only as a <span>hologram</span> displayed in <ins>the</ins> Leviathan, Switchblades ship.</p>");
echo $res;