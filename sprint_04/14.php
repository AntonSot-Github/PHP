<?php

// Task 14
// Переменная $name содержит имя пользователя. Напишите код, который проверяет что строка с именем не содержит пробелы до и после имени. Т.е. если в строке 'Bill' то в переменную $result присваивает 1, если в строке '  Bill' или 'Bill   ' или '  Bill   ' то в переменную $result присваиваетт 0. Имя может быть любое.
// Выведите $result.
// Подсказка. Чтобы понять есть пробелы до или после - сравните длины исходной строки и строки после trim.

$name = 'Bill   ';
$result;

$result = strlen($name) == strlen(trim($name, " ")) ? 1 : 0;
echo $result; // 0
