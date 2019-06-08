<?php

const PI = 3.14;

function area($r) {
    echo PI * ($r * $r) . '<br/>';
}
area(5);
area(25);
area(125);

$nums = [1, 2, 3];
$names = ['Ivanov', 'Smirnov', "Sidorov"];
echo count($names);
echo '<br/>';
echo count($nums);
echo '<br/>';

//вывод ключей массива
$keys = array_keys($names);
print_r($keys);
echo '<br>';

//вывод ключей массива нашей функции
$keys = my_array_keys($names);
print_r($keys);
echo '<br/>';

function sum($first = 5, $second = 2){
    echo $first + $second;
}
sum(70, 20);
echo '<br>';
sum(70);
echo '<br>';

function sums($a, $b){
    $c = $a + $b;
    return $c;
}
echo sums(2, 5);
echo '<br>';

//Создание функции count
function myCounts($param) {
    if (is_null($param)) {
        return 0;
    }
    if (!is_array($param)) {
        return 1;
    }
    $cnt = 0;
    foreach ($param as $value) {
       $cnt++; 
    }
    return $cnt;
}
$numer = ["a", 2];
echo myCounts($numer);

//Функция вывода ключей масива
function my_array_keys($arr){
    $data = [];
    foreach ($arr as $key => $value) {
        $data[] = $value;
    }
    return $data;
 }