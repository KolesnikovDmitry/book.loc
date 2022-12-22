<?php

$svetofor = 'red';
switch ($svetofor) {
    case $svetofor == 'green':
        echo 'Можете идти!';
        break;
    case $svetofor == 'yellow':
        echo 'Приготовьтесь';
        break;
    case $svetofor == 'red':
        echo 'Стойте';
        break;
    default:
        echo 'Светофор сломался';
        break;
}

$size = ini_get('post_max_size'); //100M
$letter = $size{strlen($size) - 1}; // M
$size = (int) $size; //8
switch (strtoupper($letter)) {
    case "G" : $size *= 1024;
    case "M" : $size *= 1024;
    case "K" : $size *= 1024;
}
echo $size;
?> 