<?php
//Логические операции
// и -&&
// или - ||
// не - !
$svetofor = "green";
if ($svetofor == 'green') {
    echo 'Можете идти!';
} elseif ($svetofor == 'yellow') {
    echo 'Приготовьтесь';
} elseif ($svetofor == 'red') {
    echo 'Стойте';
} else {
    echo 'Светофор сломался';
}
// Оператор &&
$flag1 = true;
$flag2 = true;
if ($flag1 && $flag2) {
    echo '<p>Оба флага истинны</p>';
}
if ($flag1) {
    if ($flag2) {
        echo '<p>Оба флага истинны </p>';
    }
}
#$content = file_get_contents('http://php.net') or exit('Ошибка');
#echo $content;
if (file_get_contents('http://php.net')) {
    echo 'Имеется сетевой доступ';
} else {
    echo 'Сетевого доступа нет';
}
echo '<br>';

$a = mt_rand(-10, 10);
$b = mt_rand(-10, 10);

if ($a > 0 || $b > 0) {
    if ($a > $b) {
        echo $a;
    } else {
        echo $b;
    }
} else {
    echo 'Сам руку и суй';
}
echo '<br>';

/*  Получаем текущий час в виде строки от 00 до 23  
  и приводим строку к целому числу от 0 до 23 */
$hour = (int)strftime('%H');

$welcome = ''; // Инициализируем переменную для приветствия

if ($hour < 6) {
    $welcome = 'Доброй ночи';
} elseif ($hour <= 12) {
    $welcome = 'Доброе утро';
} elseif ($hour <= 18) {
    $welcome = 'Добрый день';
} elseif ($hour <= 23) {
    $welcome = 'Добрый вечер';
} else {
    $welcome = 'Доброй ночи';
}
?>
<h1><?= $welcome ?>, Гость!</h1>