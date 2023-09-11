<?php

spl_autoload_register(function ($className) {
    //var_dump($className);
    $className = substr($className, 3);
    require_once __DIR__ . "/../src/$className.php";
});

use App\Animals\Dog as Koer;

$router = new App\Router();
var_dump(new Koer());

//var_dump($_SERVER);

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        echo 'Home page';
        break;

    case '/about':
        echo 'About';
        break;

    default:
        echo '404';
        break;
}