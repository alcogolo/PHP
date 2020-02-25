<?php

/**                                      ЗАДАНИЕ-создать две функции::
 *
 * 1.calculateSum - примет переменное количество параметров и суммирует их все.
 * 2.multiply - примет два параметра и умножит их.
 * 3.Функции должны печатать выполненные арифметические операции.
 * 4.Студент должен генерировать случайные числа и передавать их в созданные функции.
 */


$numberRand1 = mt_rand(1, 100);
$numberRand2 = mt_rand(1, 100);
function calculateSum(...$numbers) {
    echo array_sum( $numbers);
}

calculateSum(1, 2, 3, 4, 5);
echo '<br>';


function multiply($numberRand1, $numberRand2) {
    echo "$numberRand1 * $numberRand2 = " . $numberRand1 * $numberRand2;
}

multiply($numberRand1, $numberRand2);



















