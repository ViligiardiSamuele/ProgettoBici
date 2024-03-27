<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

function autoloader($class_name)
{
    $directories = ['', '/controllers', '/views', '/templates', '/src', '/models', '/config'];
    foreach ($directories as $dir) {
        $file = __DIR__ . $dir . '/' . $class_name . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
}
spl_autoload_register('autoloader');


$app = AppFactory::create();

$app->get('/home', 'HomeController:home');
$app->run();
