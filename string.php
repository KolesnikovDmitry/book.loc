<?php
header("Content-Type:text/html; charset= utf-8");
$str = "Иванов Иван Иванович";
//Разбивает строку по разделителю , в данном случае по пробелу
$data = explode(' ', $str);
print_r($data);
echo '<br/>';
echo $data[0];
echo '<br/>';
// C массива делает строку
$data = ['Иванов', 'Иван', 'Иванович'];
echo $str1 = implode(" . ", $data);
echo "<br/>";

//trim функция
$str = "\t<p>Hello</p>\n";
$str .="\n<p>world</p>\t";
//echo $str;
echo trim($str, "\t");

$str = ',....test,';
echo trim($str, ',');
echo '<br/>';
echo rtrim($str, ',');
echo '<br/>';
$str = "password";
echo md5(md5($str));

$str = "\nHello";
$str .= "\nWorld";
echo nl2br($str);
echo '<br/>';

$str = '[i]Привет[/i], меня зовут [B]Вася[/b]!';
//$str = str_replace('[b]', '<b>', $str);
//$str = str_replace('[/b]', '</b>', $str);
$search = ['[b]','[/b]','[i]','[/i]'];
$replace = ['<b>','</b>','<i>','</i>'];
//$str = str_replace($search, $replace, $str);
$str = str_ireplace($search, $replace, $str);
echo $str ."<br/>";

$str = '<i>Привет</i>, меня зовут <b>Вася</b>!<script>alert("XSS")</script>';
echo strip_tags($str, '<b><i>');
echo '<br/>';

$str = "hello";
$str = 'привет!';
//echo strlen($str);
echo mb_strlen($str, 'utf-8');
echo '<br/>';

$str = "Привет, мир!";
//echo mb_strpos($str, 'П', 0, 'utf-8');
if(mb_strpos($str, 'П', 0, 'utf-8')!==false)    echo 'OK';
else    echo 'No';
echo '<br/>';

$str = "привет, мир!";
$str2 = "ПРИВЕТ, МИР!";
echo mb_strtoupper($str, 'utf-8');
echo mb_strtolower($str2, 'utf-8');
echo '<br/>';

$str = "Привет, мир!";
echo mb_substr($str, 8, 3, 'utf-8');