<?php
 
 // Первые несколько задач мы сделаем реально полезными и напишем хелперы (helpers) - функции, которые позволяют упростить работу с массивами. Более того, при дальнейшем изучении фреймворков вы обязательно столкнетесь с такими хелперами. 


// Task 07
// Напишем полезную array_is_int функцию, которая проверяет что в массиве только числа. Возвращает true, false. Все операции реализуем в одной функции. 


$db = [4, 5, 6, 7, 7, 3, 2];

function array_is_int($arr) {
   foreach ($arr as $item){
    if (is_int($item) !== true) return false;
   }
   return true; 
}



$result = array_is_int($db); 
var_dump($result);
