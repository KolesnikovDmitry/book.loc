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
    <h1>Преобразовать из дюймов в сантиметры</h1>
    <?php
    $aIns = [19, 20, 27, 32, 45, 80];
    foreach ($aIns as $ins) {
    ?>
    <p> <?= $ins ?> дюймов = <?= round($ins * 2.54)  ?> сантиметров</p>
    <?php } ?>
</body>
</html>