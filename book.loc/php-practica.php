<?php
// Вывод букв
$var = "hello";
echo $var[0]. "<br/>";
echo $var[1]. "<br/>";
echo $var[2]. "<br/>";
echo $var[3]. "<br/>";
echo $var[4]. "<br/>";

// Считаем количество секунд в часе
$hour = 60;
$minute = 60;
echo $minute * $hour;

//Задача. Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. 
//Количество строк кода при этом не должно измениться. Код для переделки: 

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var  /= 7;
$var ++;
$var --;
echo $var . "<br>";

//  Дана произвольная строка, например, 'abcde'. 
//  Поменяйте первую букву (то есть букву 'a') этой строки на '!'

$var = 'abcde';
$var[0]='!';
echo $var . "<br>";

// Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
$num = '12345';
echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
echo '<br/>';

// Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце
$hour = 60;
$minute = 60;
$day = 24;
$month = 30;
echo "Количество секунд в часе: " . $minute * $hour . "<br/>";
echo "Количество секунд в сутках: " . $minute * $hour * $day . "<br/>";
echo "Количество секунд в месяце: " . $minute * $hour * $day * $month. "<br/>";

//Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. 
//Количество строк кода при этом не должно измениться. 
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . "<br/>";

// Переделайте этот код так, чтобы в нем использовалась операция .=. 
// Количество строк кода при этом не должно измениться. 

$text = 'Я';
$text .=' хочу';
$text .=' знать';
$text .=' PHP!';
echo $text ."<br/>";

//Дан массив с элементами 'Привет, ', 'мир' и '!'. 
//Необходимо вывести на экран фразу 'Привет, мир!'. 
$arr = ['Привет ', 'мир ', '!'];
foreach ($arr as $key => $value) {
    echo $value ;
}
echo '<br/>';
$arr[0] = "Пока ";
foreach ($arr as $key => $value) {
    echo $value ;
}
echo '<br/>';
// Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
$moneys = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $moneys['Коля'] . "<br/>";
echo $moneys['Петя'] . "<br/>";

$arrs = [
    'ru'=>['голубой', 'красный', 'зеленый'],
    'en'=>['blue', 'red', 'green'],
];
echo $arrs["ru"][0];
echo '<br/>';

$arr1=['a', 'b', 'c'];
var_dump($arr1);
echo "<br/>";
echo $arr1[0] . "<br/>";
echo $arr1[1] . "<br/>";
echo $arr1[2] . "<br/>";

$arr2=['a', 'b', 'c', 'd'];
echo '\'' . $arr2[0]. '+' .  $arr2[1] . ',' . $arr2[2] . '+' .   $arr2[3] . '\'' . "<br/>";

$arr3=['2', '3', '5', '9'];
$result = $arr3[0] * $arr3[1] + $arr3[2] * $arr3[3];
echo $result;

$arr4[] = 1;
$arr4[] = 2;
$arr4[] = 3;
$arr4[] = 4;
$arr4[] = 5;
echo '<pre>';
var_dump($arr4);
echo '</pre>';

$arr5 = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr5['c'] . '<br/>';
echo $arr5['a'] + $arr5['b'] + $arr5['c'];
echo '<br/>';

$arr6 = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr6['Коля'] . "<br/>";
echo $arr6['Петя'] . "<br/>";
