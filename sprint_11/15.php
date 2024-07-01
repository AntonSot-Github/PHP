<?php

// Task 15
// Напишите функцию f15, которая получает массив как аргумент и возвращает строку содержащую элементы массива в обратном порядке разделенніе знаком подчеркивания.
# write your code under this line

function f15($arr){
    $str = "";
   foreach ($arr as $item){
    $newArr = array_reverse($arr);
   }
   foreach ($newArr as $item){
    $str .= $item."_";
    }
   return $str;
}

$bar = [999, 888, 777, 666, 555];

$mas = f15($bar);

echo ($mas); // ожидаю 555_666_777_888_999_ или 555_666_777_888_999
