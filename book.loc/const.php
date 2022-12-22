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
echo php_uname() . '<br>';

//Функция constant();
//Определяем константу READ
define('READ', 100);
//прямое обращение к константе
echo READ . '<br>';
//Получение значения константы через функцию constant();
echo constant('READ'). '<br>';

//Динамические константы
//Формируем случайное число от 1 до 10
$index  = mt_rand(1, 31);
//Формируем имя константы
$name = define('CNT', $index);
echo constant('CNT');
echo "<br>"
?>

<p>Сегодня <?= CNT?> февраль</p>
<?php
var_dump(get_defined_constants()) .'<br>';
?>
<p>Текущая версия PHP <?= PHP_VERSION?></p>

<?php
echo "<br>";
define("pi", 3.14);
define("str", "Test string");
echo sin(pi / 4);
echo "<br>";
echo str;

