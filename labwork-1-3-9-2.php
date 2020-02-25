<?php

/**                               ЗАДАНИЕ:-Создать счётчик рекурсивных чиселю
 * 1. создать рекурсивную функцию recursiveCounter для проверки ввода цифры и распечатать следующую цифру.
 */

function recursiveCounter($number)
{
    if ($number < 100 && $number > 0) {
        return  "$number, " . recursiveCounter($number + 1) ;
    }
}

echo recursiveCounter(90);





















//function recursiveCounter($number = 0)
//{
//    echo $number . PHP_EOL;
//    return $number < 50 ? recursiveCounter($number + 1) : null;
//}
//
//recursiveCounter(45);
//
