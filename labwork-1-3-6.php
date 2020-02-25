<?php

/**                               ЗАДАНИЕ:
 *
 * 1.создать две функции:
 *------printHelloMessage - напечатает приветственное сообщение (Здравствуйте! Добро пожаловать снова!),и т.п.
 *-----printGoodBayMessage - напечатает сообщение о покупке (Купить! Есть хороший день!) и т. д.
 * 2.создать переменную $ isWelcome с логическим значением, которое генерируется случайным образом.
 * 3. В случае значения переменной студент должен вызвать одну из ранее созданных функций.
 */

function printHelloMessage() {
    echo 'Hello! Welcome again!';
}

function printGoodBayMessage() {
    echo 'Buy! Have a nice day!';
}

$randNumber = mt_rand(1, 50);
echo $randNumber;
echo '<br>';
if ($randNumber % 2 == 0) {
     printGoodBayMessage();
} else {
    printHelloMessage();
}










































