<?php
//Вывод случайного элемента массива
$arr = ['fst', 'snd', 'thd', 'fth'];
echo $arr[array_rand($arr)];
echo '<br/>';
//Получение ключей массива
$arr1 = ['fst'=> 5, 'snd'=> 6, 'thd' => 7, 'fth' => 8];
foreach ($arr1 as $key => $value) {
    $arr2 = (array_keys($arr1));
}
echo '<pre>';
print_r($arr2);
echo '</pre>';
//array_unique — Убирает повторяющиеся значения из массива
$arr = ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'];
$result = array_unique($arr);
echo '<pre>';
print_r($result);
echo '</pre>';
//Массив со случайным количеством элементов

$numbers = range(5, 10);
shuffle($numbers);
foreach ($numbers as $number) {
   $number = rand(0, 100);
}

// Названия месяцев
$months = file("home5/month.txt");
// Осуществим проход массива и выведем содержимое в виде HTML-кода вместе с номерами строк.
foreach ($months as $month_num =>$month) {
    echo "Строка #<b>" . ($month_num + 1). "</b> : " . htmlspecialchars($month) . "<br />\n";

}
// Второй пример. Получим содержание веб-страницы в виде одной строки.
// См. также описание функции file_get_contents().
$html = implode('', $months);
print_r($html);
