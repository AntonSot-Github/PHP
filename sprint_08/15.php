<?php

// Task 15
// Изучите код представленный ниже. Запустите и изучите результат выполнения кода. Снимите комментарий со строк 20-22 и запустите код еще раз. Почему возникла ошибка?


# write your code under this line

// Ответ: f16 уже объявлена в теле функции f15 и f15 была запущена. 
// В PHP запрещено объявлять функции с одинаковым названием. 
// Если не запускать f15, то ошибка не возникнет и f16 вернет 2. 

function f15() {
    function f16() {
        return 1;
    }
    echo f16();
}

f15();

function f16() {
     return 2;
 }

echo f16();