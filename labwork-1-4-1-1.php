<?php

/**                                             ЗАДАНИЕ:
 *
 * 1.проанализировать входные параметры и продолжить операции:
              -multiplication(умножение)
              -division(деление)
              -addition(сложение)
              -substraction(вычитание)
 * 2. проверить необходимую операцию и продолжить ее.
 * 3.В случае неопределенной операции или нулевого деления студент должен вывести сообщение об ошибке.
 */




//isset — Определяет, была ли установлена переменная значением, отличным от NULL
//$argv — Массив переданных скрипту аргументов
//Первый аргумент $argv[0] всегда содержит имя файла запущенного скрипта.
//trim — Удаляет пробелы (или другие символы) из начала и конца строки
// null-переменная без значения
$argv[1] = mt_rand(0, 50);
$firstNumber = isset($argv[1]) ? trim($argv[1]) : 0;
var_dump($firstNumber);
echo '<br>';
$operation = isset($argv[2]) ? trim($argv[2]) : null;
$argv[3] = mt_rand(0, 50);
$secondNumber = isset($argv[3]) ? trim($argv[3]) : 0;
var_dump($secondNumber);
echo '<br>------------------------------------------------------------------------';
echo '<br>';
$operation = '-';

//empty — Проверяет, пуста ли переменная
//empty() не генерирует предупреждение, если переменная не существует.
if (empty($operation)) {
    die('Оператор отсутствует');
}
switch ($operation) {
    case '*':
        echo $firstNumber * $secondNumber;
        break;
    case '/':
        if ($secondNumber == 0) {
            die ('Нулевое деление,ОШИБКА');
        }
        echo $firstNumber / $secondNumber;
        break;
    case '+';
        echo $firstNumber + $secondNumber;
        break;
    case '-':
        echo $firstNumber - $secondNumber;
        break;
    default:
        echo "Оператор {$operation} не определён,ОШИБКА";
}


