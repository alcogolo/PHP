<?php

/**                                           ЗАДАНИЕ:
 *                        определить текущий день и распечатать информационное сообщение
 * 1. создать переменные с идентификатором дня и текущим часом.
 * 2. Для всех дней с понедельника по пятницу  проверить рабочее время:
 *         1. Если текущий час находится между началом и окончанием рабочего дня (с 9 до 18,
 *            и т. д.) приложение должно распечатать количество часов до конца рабочего дня.
 *         2. Если рабочий день еще не начался, приложение должно напечатать количество
 *            чаов до начала рабочего дня.
 *         3. Если рабочий день уже завершен, заявка должна распечатать количество
 *            часов после окончания рабочего дня.
 *         4. Если рабочий день не начат, не закончен и не находится в процессе подачи заявки
 *            должен напечатать сообщение об ошибке.
 *         5. Для субботы и воскресенья приложение должно распечатать сообщение о выходных.
 */


$day = date('w');
$hour = date('G');
$hourStarWorkDay = 9;
$hourEndWorkDay = 18;
if($day < 6 && $day != 0) {
    if($hour > $hourStarWorkDay && $hour < $hourEndWorkDay) {
        $hourToEndWorkDay = $hourEndWorkDay - $hour;
          if($hourToEndWorkDay > 1 && $hourToEndWorkDay < 5) {
              echo "До конца рабочего дня: " . $hourToEndWorkDay . " часа";
        }
          elseif ($hourToEndWorkDay == 1) {
            echo "До конца рабочего дня: " . $hourToEndWorkDay . " час";
        } else {
            echo "До конца рабочего дня: " . $hourToEndWorkDay . " часов";
        }
    }
    elseif ($hour < $hourStarWorkDay) {
        $hourToStartWorkDay = $hourStarWorkDay - $hour;
          if ($hourToStartWorkDay > 1 && $hourToStartWorkDay < 5) {
              echo "До начала рабочего дня: " . $hourToStartWorkDay . "часа";
          }
          elseif ($hourToStartWorkDay == 1) {
              echo "До начала рабочего дня: " . $hourToStartWorkDay . "час";
          } else {
              echo "До начала рабочего дня: " . $hourToStartWorkDay . "часов";
          }
    }
     elseif ($hour > $hourEndWorkDay) {
        $hourAfterEndWorkDay = $hour - $hourEndWorkDay;
          if ($hourAfterEndWorkDay > 1 && $hourAfterEndWorkDay < 5) {
            echo "После рабочего дня прошло: " . $hourAfterEndWorkDay . "часа";
          }
          elseif ($hourAfterEndWorkDay == 1) {
            echo "После рабочего дня прошло: " . $hourAfterEndWorkDay . "час";
          } else {
            echo "После рабочего дня прошло: " . $hourAfterEndWorkDay . "часов";
          }
    } else {
        echo 'ОШИБКА';
    }
} else {
    echo "УРА, ВЫХОДНЫЕ";
}
































