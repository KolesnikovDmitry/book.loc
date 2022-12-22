<?php
$numbers = array_filter(range(0, 999), function($n) {
	return ($n % 3 == 0) || ($n % 5	 == 0);
});
//Задача 
echo array_sum($numbers)."\n";

//for ($index = 0; $index <=10; $index++) {
//    if ($index % 3 == 0 || $index % 5 == 0 ) {
//        echo $index; 
//    }
//}