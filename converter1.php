<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Конвертер</title>
</head>
<body>
    <form action="converter1.php" method="post">
        <p>Величина в дюймах: <input type="text" name="inches" size="10"></p>
        <p><input type="submit" value="Преобразовать"></p>
    </form>
<?php
require_once "func.php";

if (isset($_POST['inches'])) {
    $ins = (double)str_replace(',', '.', $_POST['inches']); // заменяем запятую на точку
    if($ins > 0 ){
        $cents = round($ins * 2.54);
        $ins_ending = case_ending($ins);
        $cents_ending = case_ending($cents);
        echo "<p> {$ins}  дюйм{$ins_ending} =  $cents  сантиметр{$cents_ending}.</p>";
    } else {
        echo '<p>Величина в дюймах должна быть больше 0</p>';
    }
}

?>
</body>
</html>