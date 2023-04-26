<?php
/**
* Summary of migrations
* @author ZYLAL
* @copyright (c) 2023
*/



use Dotenv\Dotenv;
use app\core\Aplication;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Aplication(__DIR__,$config);

$app->db->applyMigrations();