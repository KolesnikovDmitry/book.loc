<?php
$base_path = __DIR__ . DIRECTORY_SEPARATOR;
require_once $base_path . 'modules/settings.php';

function my_autoloader(string $class_name) {
    global $base_path;
    $class_name = str_replace('\\', '/', $class_name);
    require_once $base_path . 'modules/' . $class_name  .'.php';

}

spl_autoload_register('my_autoloader');

require_once $base_path . 'modules/router.php';

