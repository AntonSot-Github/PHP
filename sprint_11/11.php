<?php

// Task 11
// Напишите функцию f11, которая получает массив как аргумент и возвращает индекс максимального элемента массива.
# write your code under this line


function f11($arr){
  $maxIn = $arr[0];
  foreach ($arr as $index => $item){
    if ($item > $maxIn) $maxIn = $index;
  }
  return $maxIn;
}

$foo = array (
    0 => 11,
    1 => -22,
    3 => 33,
    10 => -500,
    11 => 501,
    12 => -502,
    13 => 503
);

$out = f11($foo);

echo($out); // ожидаю 13
