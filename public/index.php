<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Aplication;

$app = new Aplication(dirname(__DIR__));

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');
$app->router->post('/contact', function () {
    return 'hendeliing';
});

$app->run();