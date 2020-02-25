<?php

/**                                    ЗАДАНИЕ:
 *0.Изменяем Labwork-1-3-7
 *1. создать функцию getRandomNumber для генерации случайных чисел.
 *2. переписать генерирование случайных чисел в ранее созданную функцию.
 *3. переписать функции расчета на использование операторов возврата.
 *4. переписать функции печати результатов работы.
 */


/**
 * @param $x
 * @param $y
 * @return int
 */
function getRandomNumber($x, $y) {
    return mt_rand($x, $y);
}
echo 'Случайное число: ' . getRandomNumber(5, 20);
echo '<br>';


/**
 * @param mixed ...$numbers
 * @return float|int
 */
function calculateSum(...$numbers) {
    return array_sum( $numbers);
}

echo 'Сумма массива: ' . calculateSum(1, 2, 3, 4, 5);
echo '<br>';


/**
 * @param $numberRand1
 * @param $numberRand2
 * @return string
 */
function multiply($numberRand1, $numberRand2) {
    return "$numberRand1 * $numberRand2 = " . $numberRand1 * $numberRand2;
}
$numberRand1 = getRandomNumber(5, 20);
$numberRand2 = getRandomNumber(0, 100);
echo  'Умножение случайных чисел: ' . multiply($numberRand1, $numberRand2);























