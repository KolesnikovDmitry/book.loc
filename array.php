<?php

$arr = [
    "name" => "John",
    "login" => "root",
    "pass" => "12345"
];
$arr['age'] = 25;
$arr[] = true;
print_r($arr);

// Срез строки 
$input_array = ["a", "b", "c", "d", "e"];
print_r(array_slice($input_array, 2, 1, true));

//Удаляет часть массива и заменяет её чем-нибудь ещё
$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 2)); //убирает blue, yellow
print_r($input); // $input теперь array("red", "green")

$input = array("red", "green", "blue", "yellow");
(array_splice($input, 1, -1)); // $input теперь array("red", "yellow")

$input = array("red", "green", "blue", "yellow");
print_r(array_splice($input, 1, count($input), "orange"));
print_r($input); // $input теперь array("red", "orange")
//Обьединение массивов
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Объединение $a и $b
echo "Объединение \$a и \$b: \n";
var_dump($c);

//Ассоциативный массив

$goods = [
    [
        "title" => "Nokia",
        "price" => "200",
        "desc" => "android"
    ],
    [
        "title" => "Iphone 5s",
        "price" => "100",
        "desc" => "iphone",
    ]
];
echo $goods[0]['title'] . " - " .  $goods[0]['price'];
echo"<br/>";
echo $goods[1]['title'] . " - " .  $goods[1]['price'];