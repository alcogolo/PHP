<?php

/**                                                 ЗАДАНИЕ:
 *                        Использование пользовательских и предопределенных констант:
 *
 * 1. распечатать путь в каталоге сценария.
 * 2. напечатать имя файла сценария.
 * 3. напечатать номер текущей исполняемой строки.
 * 4. создать несколько пользовательских констант с проверкой на уже существующие константы.
 * 5. распечатать значения определенных констант.
 */

echo '1. путь в каталоге сценария: ' . __DIR__ ;
echo '<br>';
echo '2. имя файла сценария: ' .  __FILE__ ;
echo '<br>';
echo '3. номер текущей исполняемой строки: ' .  __LINE__ ;
echo '<br>';
echo '<br>';
define('TEST', 'example');
echo TEST ;
echo '<br>';
echo defined('TEST');
echo '<br>';