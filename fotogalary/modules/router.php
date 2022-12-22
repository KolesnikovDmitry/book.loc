<?php
use controllers\Images;
$request_path = $_GET['route'];

$ctr = new Images();
if ($request_path == '') {
    $ctr->list();
} else {
    $index = (integer) $request_path;
    $ctr->item($index);
}



