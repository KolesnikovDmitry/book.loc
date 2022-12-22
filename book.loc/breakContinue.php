<!--break-->
<?php
for ($i = 0; $i <= 10; $i++){
    echo $i . "<br/>";
    if ($i == 5) { // авершилось на 5
        echo 'FAILED!';
        break;
    }
}
echo '<br/>';

//continue
for ($i = 0; $i <= 10; $i++){
   if ($i == 5 || $i == 7)continue; //Пропустило 5 и дальше продолжило выполнение цикла
    echo $i . "<br/>";

}
echo '<br/>';
for ($i = 0; $i <= 10; $i++){
   if ($i >= 2 && $i <= 7)continue; //Диапазон от 2 до 7 
    echo $i . "<br/>";

}
echo '<br/>';