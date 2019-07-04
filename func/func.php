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
?>
<?php
$m = date("i");

function ends($m,$v){
    $m0 = $m % 10;
    $m1 = $m % 100;
    if($m1 >= 5 && $m1 <= 20 ) {
        $res = $v[0];
    } elseif($m0 == 1) {
        $res = $v[1];
    } elseif($m0 >=2 && $m0 <=4) {
        $res = $v[2];
    
    } else {
       $res = $v[0]; 
    }
    return $res;
}
$m = ["минут", "минута", "минуты"];
for($i = 0; $i <= 159; $i++) {
    echo $i . " " . ends($i, $m) . "\n";
}

$m = ["товаров", "товар", "товара"];
for($i = 0; $i <= 159; $i++) {
    echo $i . " " . ends($i, $m) . "\n";
}
$m = ["дней", "день", "дня"];
for($i = 0; $i <= 365; $i++) {
    echo $i . " " . ends($i, $m) . "\n";
}

