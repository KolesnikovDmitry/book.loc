<?php
//Таблица умножения
echo '<table border = 1>';
$tr = 1;
while ($tr <= 9) {
    echo '<tr>';
    $td = 1;
    while ($td <= 9) {
        echo"<td style ='width : 20px'>" . ($td * $tr) . '</td>';
        $td++;
    }
    echo '</tr>';
    $tr++;
}
echo '</table>';
echo '<br/>';

//Года

$year = 1990;
echo '<select>';
while ($year <= 2015) {
    echo "<option value= $year>$year</option>";
    $year++;
}
echo '</select>';


