<?php
//Константа
error_reporting(-1);
define('NUMBER', 1);
define('VALUE', 'Hello, World');
echo NUMBER . '<br>';
echo VALUE . '<br>';

define('REGISTR', 'Hello, World', true);
echo REGISTr . '<br>';
echo REGIstR . '<br>';
// Проверка константы
if (define('REGISTR', 'Hello, World')) {
    echo 'Константа REGISTR получила значение "Hello, World" <br>';
}
if (define("REGISTR", 1)) {
    echo 'Константа REGISTR получила значение "1" <br>';
}
if (defined('NUMBER')) {
    echo NUMBER . '<br>';
}
echo php_uname();
?>