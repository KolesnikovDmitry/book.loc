<?php

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
} else  {
    echo 'Сетевого доступа нет';
}