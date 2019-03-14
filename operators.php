<!--Функция print принимает только один параметр-->
<?php
$number = mt_rand(1, 100);
print('Сегодня '. $number . ' участников' . '<br>');
echo 5 / 3 . '<br>';
echo intval(5 / 3) . '<br>';
echo (int)(5 / 3) . '<br>';
?>
<!-- Проверка числа на четность-->
<?php
$number = 5317;
if ($number % 2) {
    echo 'Число не четное';
} else {
    echo 'Число четное ';
}

//Квадратный корень числа
echo '<br>';
echo 25 ** 0.5;
echo '<br>';
//Применение инкремента к строке
$var = 'aaa';
echo ++$var;
echo '<br>';
for ($index = 'a'; $index < 'h'; $index++) {
    echo $index;
}
echo '<br>';
// Поразрядные операторы
echo 2 & 10;//оператор И двоичное представление
echo '<br>';
echo ~47;
