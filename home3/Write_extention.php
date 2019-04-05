<!--sudo chmod 777 -R htdocs (Права пользователя на запись и изменения файлов)-->
<?php
$arr = get_loaded_extensions (); // строка для записи
file_put_contents('home3/extentions.txt', var_export($arr, true));
$const = (get_defined_constants());
file_put_contents('home3/const.txt', var_export($const, true));






