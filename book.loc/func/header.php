<?php
header('Content-Type:text/html; charset=UTF-8');
//Редирект
//header('Location:func/inc.php');
// переброска на другой файл с 5 минутной задержкой
//header('refresh: 5; url=func/inc.php');
//exit();
// или
//die();
//404
//header('HTTP/1.0 418 "I’m a teapot"');
header('Content-Type: text/plain;charset = UTF-8');
header('Content-Disposition: attachment; filename="downloaded.txt"');
readfile('func/text.txt');
die();
?>
<!doctype html>
<html lang="en">
    <head>
        <!--<meta charset="UTF-8">-->
        <title>Document</title>
    </head>
    <body>
        <h1>Привет, мир!</h1>
    </body>
</html>  
