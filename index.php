﻿<?php
/* 1.	Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран c использованием другой переменной.*/
$a = 3;
$b = $a;
echo $b . "<br>";
/* 2.	Создайте переменные $a=10 и $b=2. Рассчитать их сумму, разность, произведение и частное (результат деления).  Вывести на экран результаты вычислений, поделенных на среднее значение этих переменных.*/
$a = 10;
$b = 2;
$aa = ($a+$b)/(($a+$b)/2);
echo $aa. "<br>";
$ab = ($a-$b)/(($a+$b)/2);
echo $ab. "<br>";
$ac = ($a*$b)/(($a+$b)/2);
echo $ac. "<br>";
$ad = ($a/$b)/(($a+$b)/2);
echo $ad. "<br>";
/* 3.	Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.*/
$c =15;
$d =2;
$f = $c + $d;
echo $result = $f. "<br>";
/* 4.	Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму деленное на среднее значение этих переменных.*/
$a=10;
$b=2;
$c=5;
$d = ($a+$b+$c)/(($a+$b+$c)/2);
echo $d. "<br>";
/* 5.	Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 17. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.*/
$a=17;
$b=10;
$c=$a-$b;
$d=17;
$e=$c+$d;
echo $result = $e. "<br>";
/*Часть 2 */
/*1.	Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран, дополнив текст «Моя первая программа!».*/
$text = 'Привет, Мир!';
$text = $text.'Моя первая программа!';
echo $text. "<br>";

/*2.	Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.*/
$text1='Привет, ';
$text2='Мир!';
echo $text1.$text2. "<br>";
/*3.	Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. Создайте переменную $text и присвойте ей текст с новой строки 'Новый текст'.*/
$name = 'Сергей!';
echo 'Привет, '."$name".'<br>';
/*4.	Создайте переменную $age и присвойте ей любой возраст. Создайте переменную $height и присвойте ей любой рост. Выведите на экран 'Мой возраст: %Возраст%' и продолжите текст 'Мой рост: %Рост%' разделив символом |.*/
$age = 19;
$height = 173 ;
echo '<br>' . 'Мой возраст: ' . $age;
echo "|" . 'Мой рост: ' . $height. "<br>";
/*5.	Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.*/
$text = 'abcde';
echo $text[0].'<br>';
echo $text[2].'<br>';
echo $text[4].'<br>';
/*Часть 3*/
/*1.	Создайте массив $arr, который имеет следующие значения ['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump(), в том числе каждый элемент массива отдельно.*/
$arr = array ('a','b','c');
var_dump($arr);
echo  '<br>';
var_dump($arr[0]);
echo  '<br>';
var_dump($arr[1]);
echo  '<br>';
var_dump($arr[2]);
echo  '<br>';
/*2.	С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов, объединив в одну строку.*/
echo $arr[0] . $arr[1] . $arr[2];
/*3.	Создайте массив $arr, который имеет следующие значения ['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d, a-d, a/d'.*/
echo "<br>";
$arr =  array('a', 'b', 'c', 'd');
echo $arr[0] . "+" . $arr[1] . ", " . $arr[2] . "+" . $arr[3] . ", " . $arr[0] . "-" . $arr[3] . ", " . $arr[0] . "/" . $arr[3];
/*4.	Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.*/
echo "<br>";
$arr =  array(2, 5, 3, 9);
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo $result;
/*5.	Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием $arr[] новое значение со случайными ключами (индексами).*/
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
/*Часть 4*/
/*1.	Создайте массив $arr. Выведите на экран элемент с ключом 'c' и сумму чисел в массиве не используя функции для работы с масиивами.
Пары для массива:'a'=>11, 'b'=>20, 'c'=>30*/
$arr =  array('a'=>11, 'b'=>20, 'c'=>30);
echo $arr["c"] . "<br>";
echo $arr["a"] + $arr["b"] + $arr["c"];
/*2.	Создайте массив $arr. Найдите сумму элементов этого массива.
Пары для массива: 'q3'=>12, 'r3'=>23, 'f3'=>34*/
$arr =  array('q3'=>12, 'r3'=>23, 'f3'=>34);
echo $arr["q3"] + $arr["r3"] + $arr["f3"];
/*3.	Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
Пары для массива: 'Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'*/
echo "<br>";
$arr =  array('Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$');
echo "Петя " . $arr['Петя'] . "<br>";
echo "Коля " . $arr['Коля'] . "<br>";
/*4.	Создайте ассоциативный массив месяцев года. Ключами в нем должны служить номера месяцев. Выведите на экран первый и последний месяцы учебного года.*/
$arrM =  array('1'=>'Январь','2'=>'Февраль','3'=>'Март','4'=>'Апрель','5'=>'Май','6'=>'Июнь','7'=>'Июль','8'=>'Август','9'=>'Сентябрь','10'=>'Октябрь','11'=>'Ноябрь','12'=>'Декабрь');
echo $arrM['9'];
echo "<br>";
echo $arrM['6'];
echo "<br>";
/*5.	Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3. Выведите день недели, соответствующий значению переменной $day.*/
$arrN =  array('1'=>'Понедельник','2'=>'Вторник','3'=>'Среда','4'=>'Четверг','5'=>'Пятница','6'=>'Суббота','7'=>'Воскресенье');
$day = '3';
echo $arrN[$day];
?>
