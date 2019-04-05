 <?php 
 //Выводим дату
$current = date("Y:m:d:h:i:s");

//Записываем дату в имя файла
//$file = "$current.txt";
$file = fopen("home2/$current.txt", 'w+') or die("не удалось открыть файл");
$numberRand = mt_rand(0, PHP_INT_MAX); // строка для записи
fwrite($file, $numberRand); // запишем строку в начало
fclose($file);
//Выводим файл и его содержимое
echo $file;
?>


