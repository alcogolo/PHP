<?php

//СОЗДАНИЕ ПЕРЕМЕННЫХ С РАЗНЫМИ ТИПАМИ ДАННЫХ

echo 'СКАЛЯРНЫЕ ТИПЫ ДАННЫХ';
echo '<br>';
echo '<br>';
$bool = True;
echo '1.переменная $bool:имеет тип данных ' . gettype($bool) . ' и значение =' . $bool;
echo '<br>';
$int = 777;
echo '2.переменная $int:имеет тип данных ' . gettype($int) . ' и значение =' .  $int;
echo '<br>';
$flo = 4.11;
echo '3.переменная $flo:имеет тип данных ' . gettype($flo) . ' и значение =' . $flo;
echo '<br>';
$str = 'php';
echo '4.переменная $str:имеет тип данных ' . gettype($str) . ' и значение =' . $str;
echo '<br>';
echo '<br>';
echo 'СМЕШАННЫЕ ТИПЫ ДАННЫХ(Compound types-массивы и объекты)';
echo '<br>';
echo '<br>';
$arr = array("Name" => "Igor", "Age" => 40);
echo '5.переменная $arr:имеет тип данных ' . gettype($arr) . ' и значение =';
print_r($arr);
echo '<br>';
Class training{}
$obq = new training();
echo '6.переменная $obq :имеет тип данных ' . gettype($obq) . ' и значение =';
var_dump($obq);
echo '<br>';
echo '<br>';
echo 'SPECIAL TYPES';
echo '<br>';
$res = curl_init(); //Инициализирует новый сеанс cURL и возвращает дескриптор, который используется с функциями
echo '7.переменная $res :имеет тип данных '. gettype($res) . ' и значение =';
var_dump($res);
curl_close($res); //Завершает сеанс cURL и освобождает все ресурсы.
echo '<br>';
$null = null;
echo '8.переменная $null:имеет тип данных ' . gettype($null) . ' и значение =';
var_dump($null);
echo '<br>';
echo '<br>';
echo 'ПРИМЕРЫ ИЗМЕНЕНИЯ ТИПОВ ДАННЫХ В ПЕРЕМЕННЫХ';
echo '<br>';
$a = '777.7';
echo '$a = "777.7"';
echo '<br>';
echo '<br>';
$b = (bool)$a;
echo '$b = (bool)$a';
echo '<br>';
echo '$b =' . $b;
echo '<br>';
echo '<br>';
$c = (int)$a;
echo '$c = (int)$a';
echo '<br>';
echo '$c =' . $c;
echo '<br>';
echo '<br>';
$d = floatval($a);
echo '$d = floatval($a)';
echo '<br>';
echo '$d =' . $d;
echo '<br>';
echo '<br>';
$e = intval($a);
echo 'intval($a)';
echo '<br>';
echo '$e =' . $e;

?>;
