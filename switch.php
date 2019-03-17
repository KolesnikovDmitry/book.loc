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
