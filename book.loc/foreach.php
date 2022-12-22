<?php
$arr = ["Ivanov", "Petrov", "Sidorov"];
$arr[] = "Smirnov"; 
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br/>";
}
$names = [
  'Ivan' => "Ivanov",  
  'Petr' => "Petrov",  
  'Sidor' => "Sidorov",  
];
foreach ($names as $name => $surname) {
    echo "Имя: <b>$name</b> " .  "Фамилия: <b>$surname</b> . <br>";
}
?>
