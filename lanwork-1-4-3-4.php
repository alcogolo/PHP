<?php

/**                                        ЗАДАНИЕ:
 *                              СОЗДАТЬ АНАЛИЗАТОР ВХОДНЫХ ДАННЫХ:
 *
 * 1. разбить массив переданных параметров по парам.
 * 2. проверить первый параметр каждой пары на предмет правильности ключа:
                      -кей должен иметь любую длину и начинается с двух минусов (-)
 *                    -кей должен иметь длину два символа и начинается с одного минуса (-)
 * 3. сохранить все действительные ключи и их значения в ассоциативном массиве.
 */

echo " <b>Создаём массив с числами от 1 до 8 :</b>";
echo '<br>';
$array = [1, 2, 3, 4, 5, 6, 7, 8];
print_r(($array));
echo '<br>';
echo '<br>';
echo " <b>Разбиваем массив переданных параметров по парам :</b>";
echo '<br>';
//array_chunk -- Разбить массив на части по 2 элемента
$argumentParts = array_chunk($array, 2);
//распечатываем
print_r($argumentParts);
echo '<br>';
echo '<br>';
//substr-Возвращает подстроку строки string,(в данном случае это значения с индексом [0] каждой пары)
// начинающейся с start символа(это 0,то есть с самого начала)
// по счету и длиной length символов(в данном случае 2 символа '--') и
// приравниваем эту подстроку символу '--' , и записываем в переменную $keyNik1.
//в переменную $keyNik2 записываем почти аналогично,только начинается значения первого
// параметра с первого
// символа,который приравниваем символу'-' и длина названия ключа должна быть длиной в 2 символа
foreach ($argumentParts as $value) {
    $keyNik1 = substr($value[0], 0, 2) == '--';
    $keyNik2 = substr($value[0], 0, 1) == '-' && strlen($key[0]) == 2;

//если в наличии $keyNik1 или $keyNik2,то записываем в переменную  $key -
//с удалённым  символом('- ') с помощью функции trim,извлечённое первое
// значение массива значений $value с помощью функции array_shift
    if ($keyNik1 || $keyNik2) {
        $key = trim(array_shift($value), '-');
        //записываем в массив $array с индексом $key(там где извлечённое первое
        // значение с вырезанным символом '-') извлекаемый последний элемент массива
        $array[$key] = array_pop($value);
    }
}
// ключи массива $array теперь будут по порядку от 0 до 7
var_dump($array[$key]);































