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
echo '<br>';
//Демонстация работы со списками
$namesList[0] = "Geofrey Darrow";
$namesList[1] = "Hugo Weaving";
$namesList[2] = "Yuen Wo Ping";

echo "Вот первый элемент массива: " . $namesList[0] ."<hr/>";
// Печатаем в цикле все элементы массива
// Синоним count = sizeof
for ($i = 0; $i < count($namesList); $i++) {
    echo $namesList[$i]. "<br>";
}
echo '<hr>';

$names["Anderson"] = "Thomas";
$names["Weaving"] = "Hugo";
$names["Darrow"] = "Geofrey";

$f = "Anderson";
echo $names["Weaving"] . " said: Hmmm, mr. " . $names[$f];
echo '<hr/>';

// Конструкция list
$list = ['Ivan', 'Ivanov', '47'];
list ($name, $surname, $age) = $list;
echo "Имя: " . $name . ", ", "Фамилия:" .$surname . ", ", "Возраст: " . $age;
echo '<hr/>';

$arr = [1, 2, 3];
list($one, $two, $three) = $arr;
echo $two;
echo '<hr/>';

//Обмен значений переменных без переменной-посредника
$eng = "Pit";
$rus = "Вася";

echo "до:<br/>";
echo "eng = $eng<br />";
echo "rus = $rus<br />";

list($eng, $rus) = [$rus, $eng];

echo "после:<br/>";
echo "eng = $eng<br />";
echo "rus = $rus<br />";
echo '<hr/>';        
        
//Обход многомерных массивов в цикле

$ships = [
    "Пассажирские  корабли" => ["Лайнер", "Яхта", "Паром"],
    "Военные корабли" => ['Авианосец', 'Линкор', 'Эсминец'],
    "Грузовые корабли" => ["Сормовский", "Волго-Дон", "Окский"]
];
foreach ($ships as $ship => $type) {
    //Вывод значений основных массивов
    echo "<b>$ship</b><br/>";
    foreach ($type as $ship) {
        //Вывод значений для каждого из массивов
        echo"<li>$ship</li>";
    }
}
echo "<hr/>"                                                                                                                                                                                                         ;
// Слияние массивов

$fst = [1=>"one", 2=>"two"];
$snd = [3=>"three", 4=>"four"];
$sum = $fst + $snd;
echo '<pre>';
print_r($sum);
echo '</pre>';

//Вместо оператора + используют array_merge

$fst = ['one', 'two', 'three'];
$snd = ['for', 'five', 'six'];
$sum = array_merge($fst, $snd);
echo '<pre>';
print_r($sum); 
echo '</pre>';

//Сравнение массивов
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [1, 2, 3, 4, 5];
$arr3 = [1, 2, 3, 4];
$arr4 = [1, 2, 3, 4, 5];

if ($arr1 == $arr2) {
    echo 'Массивы равны<br/>';
} else {
    echo 'Массивы не равны';
}
if ($arr1 ==$arr3) {
   echo 'Массивы равны<br/>';
} else {
    echo 'Массивы не равны<br/>';
}
if ($arr1 ==$arr4) {
   echo 'Массивы равны<br/>';
} else {
    echo 'Массивы не равны<br/>';
}
echo '<hr/>';
$fst = [1 => 1, 2 => 2];
$snd = [1 => 1, 2 => '2'];

if ($fst == $snd) {
    echo 'Массивы равны<br/>';
}else{
    echo 'Массивы не равны';
}
if ($fst === $snd) {
    echo 'Массивы эквивалентны<br/>';
}else{
    echo 'Массивы не эквивалентны';
}
echo '<hr/>';

$fst = [1 => 1, 2 => 2];
$snd = [1 => 1, '2' => 2];
if ($fst == $snd) {
    echo 'Массивы равны<br/>';
}else{
    echo 'Массивы не равны';
}
if ($fst === $snd) {
    echo 'Массивы эквивалентны<br/>';
}else{
    echo 'Массивы не эквивалентны';
}
echo '<hr/>';
//Проверка сушествования элементов массива

$arr = [5 => 1, 2, 3];
for ($i = 0; $i < 10; $i++) {
    if (isset($arr[$i])) {
        echo "Элемент \$arr[$i] существует <br/>"; 
    } else {
        echo "Элемент \$arr[$i] не существует <br/>";
    }
}
echo '<hr/>';
$arr = [1, 2, 3];

if (is_array($arr)) {
    echo 'Это массив<br/>';
}else{
    echo 'Это не массив';
}
if (is_array($arr[0])) {
    echo 'Это массив<br/>';
}else{
    echo 'Это не массив<br/>';
}
echo '<hr/>';
//Поиск в массиве - in_array                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
$numbers = [0.57, '21.5', 40.52];
if (in_array(21.5, $numbers)) {
    echo 'Значение 21.5 найдено';
} else {
    echo 'Ничего не найдено';
}
echo '<br/>';
//Поиск в массиве - in_array , спроверкой эквивалентности
$numbers = [0.57, '21.5', 40.52];
if (in_array(21.5, $numbers, true)) {
    echo 'Значение 21.5 найдено';
} else {
    echo 'Ничего не найдено';
}
echo '<br/>';

//Поиск ключей массива
$arr = ['first_numb' => 1, 'second_numb' => 2];
if (array_key_exists("first_numb", $arr)) {
    echo "OK" . "<br/>";
}
//использование функции array_search()
$array = [0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'];
$key = array_search('green', $array);
echo $key . "<br/>";
$key = array_search('red', $array);
echo $key . "<br/>";

//Удаление элементов массива

$arr = [1, 2, 3, 4, 5];
//Удаляем третьий элемент массива
unset($arr[2]);
//Выводим дамп памяти
echo '<pre>';
print_r ($arr);
echo '</pre>';

//Можно уничтожить и весь массив

$arr = [1, 2, 3, 4, 5];
unset($arr);
echo '<pre>';
print_r ($arr);
echo '</pre>';

//Сортировка массива
$A = [
    "a" => "Диван",
    "b" => "Арфа",
    "c" => "Гриб",
    "d" => "Сон",
    "e" => "Блюз"
];
asort($A); // По возрастанию
echo '<pre>';
print_r($A);
echo '</pre>';

arsort($A);//По убыванию
echo '<pre>';
print_r($A);
echo '</pre>';

ksort($A);//По ключам
echo '<pre>';
print_r($A);
echo '</pre>';

//Пользовательская сортировка по ключам
// Записываем в $files имя текущего каталога:
//массив с ключами - именами файлов и значениями - их размером

$d = opendir(".");
while (false !== ($e = readdir($d))) {
    if(is_dir($e)) $files[$e] = 0;  
    else $files[$e] = filesize($e);
}
//Cортируем его и печатаем
uksort($files, function($f1, $f2){
    //Эта функция должна сравнивать значения $f1 и $f2(имена файлов или каталогов) и возвращать:
    //-1, если $f1 < $f2,
    //0, если $f1 == $f2,
    //1, если $f1 > $f2,
    //Под < и > понимается следование этих имен в  выводимиом списке
    //Каталог всегла предшествует файлу
    if (is_dir($f1) && !is_dir($f2)) return -1;
    //Файл всегда идет после каталога
    if (is_dir($f1) && !is_dir($f2)) return 1;
    //Иначе сравниваем лексикографмчески
    return $f1 <=> $f2;
    print_r($files);
});

//array_reverse ( возpamaeт Maccuв, элементы которого следуют в o6paтном
//порядке, относительно массива
$A = [
    "a" => "Диван",
    "b" => "Арфа",
    "c" => "Гриб",
    "d" => "Сон",
    "e" => "Блюз"
];
$A = array_reverse($A);
print_r($A);

//Естественная сортировка

$files = [
    "img10.gif",
    "img1.gif",
    "img2.gif",
    "img20.gif",
];
//asort($files);
natsort($files);
echo '<pre>';print_r($files);

//Сортировка списков

$A = ["One", "Two", "Three", "Four"];
sort($A);
print_r($A);