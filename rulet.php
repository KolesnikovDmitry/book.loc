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
<?php
$items = [
    'Книгу почитать',
    'Видео webfomyself',
    'Видео Лаврика',
    'Видео от специалиста',
    'Читать php.net',
    'Доделывать вебинар',
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



