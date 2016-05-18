<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// Database
$container['db'] = function ($c) {
    $settings = $c->get('settings')['db'];
    $db = new \Slim\PDO\Database($settings['dsn'], $settings['user'], $settings['password']);
    $db->query('SET GLOBAL time_zone="+00:00"');
    $db->query('SET NAMES utf8');
    return $db;
};
