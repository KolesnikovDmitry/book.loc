
<!--Таблица умножения-->
<?php 
$rows = 10;
$cols = 10;
echo '<table border="1">';
    for ($tr = 1; $tr <= $rows; $tr++){
        echo"<tr>";

        for ($td = 1; $td <= $cols; $td++){
            echo"<td style ='width : 20px'>" . ($td * $tr) . '</td>';
        }
        echo '</tr>';
    }
echo '</table>';
echo '<br>';

//Таблица умножения 2

$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td>'. $tr*$td .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; // сделали эхо всего 1 раз
echo '<br>';
?>

<!--Таблица умножения 3-->
<?php 
$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td
?>
<table border="1">
<?php for ($tr=1; $tr<=$rows; $tr++) { ?>
    <tr>
    <?php for ($td = 1; $td <=$cols; $td++){ ?>
        <td> <?= $td*$tr ?> </td>
    <? } ?>
    </tr >
<? } ?>
</table>
<?= "<br>"?>
<select>
    <?php for ($year = 1900; $year <= 2019; $year++) { ?>
    <option><?= $year?></option>
    <? } ?>
</select>