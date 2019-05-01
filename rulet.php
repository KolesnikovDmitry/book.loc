<?php

//$index = mt_rand(1, 8);
//Формируем имя константы
#$name = define('CNT', $index);
//if ($index == 1) {
//  echo "Книгу почитать Санину"; 
//} elseif ($index == 2) {
//  echo "Видео webfomyself"; 
//} elseif ($index == 3) {
//    echo 'Видео webfomyself любое не выбор '; 
//} elseif($index == 4) {
//    echo "Видео от специалиста";
//} elseif ($index == 5){
//    echo "Смотреть пелемени";
//} elseif ($index == 6){
//    echo "Играть в ведьмака";
//} else {
//    echo "Ошибка!";
//}

//switch ($index) {
//    case 1:
//        echo "Книгу почитать";
//        break;
//    case 2:
//        echo "Видео webfomyself";
//        break;
//    case 3:
//        echo "Видео Лаврика";
//        break;
//    case 4:
//        echo "Видео от специалиста";
//        break;
//    case 5:
//        echo "Книгу Котерова длинную";
//        break;
//    case 6:
//        $index = mt_rand(1, 4);
//        if ($index == 1) {
//            echo "Верстать от master";
//        } elseif ($index == 2) {
//            echo 'Верстать блог на jekill';
//        } elseif ($index == 3) {
//            echo 'Верстать интернет-магазин';
//        } elseif ($index == 4) {
//            echo 'Верстать портфолио';
//        } elseif ($index == 5) {
//            echo 'Верстать php-блог';
//        }
//        break;
//    case 7:
//        echo "Доделывать вебинар";
//        break;
//    case 8:
//        echo "Читать php.net";
//        break;
//
//
//    default:
//        echo "Ошибка!";
//        break;
//}
//?>

<html>
    <head>
        <style type="text/css">
            body {
                color:white;
                font-size:14px;
            }
            .contact {
                text-align:center;
                background: none repeat scroll 0% 0% <?= random_html_color(); ?>;
                padding: 20px 10px;
                box-shadow: 1px 2px 1px #8FBF73;
                border-radius: 10px;
                width:510px;
            }
            #submit
            {
                background:none repeat scroll 0% 0% <?= random_html_color(); ?>;
                display: inline-block;
                padding: 5px 10px;
                line-height: 1.05em;
                box-shadow: 1px 2px 3px #8FCB73;
                border-radius: 8px;
                border: 1px solid #8FCB73;
                text-decoration: none;
                opacity: 0.9;
                cursor: pointer;
                color:white;
            }

        </style>
    </head>
    <body>
                <div class="contact">
            <h1>Выбор уроков: </h1>
            <form action="#" method="POST">
                <input  type="submit" name="submit" id="submit" value="Погнали"></input>
            </form>

    </body>   
</html>
<?php

function random_html_color()
{
    return sprintf( '#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255) );
}

?>
<?php
$items = [
    'Книгу почитать',
    'Видео webfomyself',
    'Видео Лаврика',
    'Видео Лаврика практика',
    'Видео от специалиста',
    'Читать php.net',
    'Доделывать вебинар',
    'Читать книгу длинную',
    'Делать интернет-магазин php',
    'Играть в игру colobot',
    'Практика php от Трепачева',
    'Практика php от Специалиста',
    'Практика php проект Эйлера',
    [
        'Верстать от master',
        'Верстать блог на jekill',
        'Верстать интернет-магазин',
        'Верстать портфолио',
        'Верстать php-блог',
    ],
    [
        'освоить бутсрап',
        'smartgrig',
        'grid',
    ],
];

function getRandomItem($array)
{
    $data = $array[array_rand($array, 1)];

    if (is_array($data)) {
        return getRandomItem($data);
    }

    return $data;
}

echo getRandomItem($items);
echo '<br>';

$time = [
    '30 мин',
    '45 мин',
    '1 час',
];
echo $time[array_rand($time)];
?>



