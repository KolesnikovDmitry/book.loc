<?php
function case_ending(string $is) : string
{
    // проверяем есть ли в полученной строке десятичная точка или предпоследний символ равен 1, то создаем пересенную со знач. "ов"
    if (strpos($is, '.') !== FALSE || (strlen($is) > 1 && $is[-2] == '1')) {
        return 'ов';
    } else {
        $is = $is[-1];// последний символ величины в дюймах
        if ($is == 1)
            return '';
        else if ($is >= 2 && $is <= 4)
            return 'a';
        else
            return 'ов';
    }
}