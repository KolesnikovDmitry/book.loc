<?php
//$file = 'home1/hello.txt';
//$current = file_get_contents($file);
//$current .= "Hello, world";
//file_put_contents($file, $current);

$fd = fopen("home1/hello.txt", 'w+') or die("не удалось открыть файл");
$str = "Привет мир!"; // строка для записи
fwrite($fd, $str); // запишем строку в начало
fseek($fd, 0); // поместим указатель файла в начало
fwrite($fd, "Хрю"); // запишем в начало строку
fseek($fd, 0, SEEK_END); // поместим указатель в конец
fwrite($fd, $str); // запишем в конце еще одну строку
fclose($fd);
