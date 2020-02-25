<?php

/**                                      ЗАДАНИЕ:
 *                         КАК ИЗМЕНИТЬ ТИПЫ ДАННЫХ В ПЕРЕМЕННЫХ
 * 1. Булевы в целочисленные и наоборот (для целых чисел преобразовать в bool положительные,
 *     отрицательные и нулевые числа).
 * 2. float в целое и наоборот.
 * 3. Строка в Integer и наоборот.(преобразовать строки с номерами в содержании).
 * 4. Массив в строку и наоборот.
 * 5. Массив в объект и наоборот.
 * 6.
 */


echo 'ПРИМЕРЫ ИЗМЕНЕНИЯ ТИПОВ ДАННЫХ В ПЕРЕМЕННЫХ';
echo '<br>';
$a = 777.7;             //переменная с числом-float
echo '$a = 777.7';
echo '<br>';
$b = 'Test string';      //переменная со строкой.
echo '$b = "Test string"';
echo '<br>-----------------------------------------------------------------------------';
echo '<br>';
echo 'Integer "$a" to boolean: ';
var_dump((bool)$a);
echo '<br>';
echo 'Integer "-777" to boolean: ';
var_dump((bool)-777);
echo '<br>';
echo 'Integer "0" to boolean: ';
var_dump((bool)0);
echo '<br>-----------------------------------------------------------------------------';
echo '<br>';
echo 'Boolean "false" to integer: ';
var_dump((int)false);
echo '<br>';
echo "Boolean 'true' to integer: ";
var_dump((int)true);
echo '<br>-----------------------------------------------------------------------------';
echo '<br>';
echo 'Float "$a" to integer: ';
var_dump((int)$a);
echo '<br>';
echo 'Integer "41" to float: ';
var_dump((float)41);
echo '<br>-----------------------------------------------------------------------------';
echo '<br>';
echo 'String "$b" to integer: ';
var_dump((int)$b);
echo '<br>';
echo 'String "12 chairs" to integer: ';
var_dump((int)'12 chairs');
echo '<br>';
echo 'String "12 chairs and 1 table" to integer: ';
var_dump((int)'12 chairs and 1 table');
echo '<br>';
echo '<br>';
echo 'Integer "$a" to string: ';
var_dump((string)$a);
echo '<br>-----------------------------------------------------------------------------';
echo '<br>';
echo 'Array "[1, 2, 3, 4, 5]" to string: ';
var_dump((string)[1, 2, 3, 4, 5]);
echo '<br>';
echo 'String "$b" to array: ';
var_dump((array)$b);
echo '<br>-----------------------------------------------------------------------------';
echo '<br>';
echo 'Array "[1, 2, 3, 4, 5]" to object: ';
var_dump((object)[1, 2, 3, 4, 5]);
echo '<br>';
class test {}
$c = new test;
echo 'Object "$c" to array: ';
var_dump((array)$c);
echo '<br>';
?>;

