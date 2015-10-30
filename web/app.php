<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function () use ($app) {
    return 'Hello world!';
});

$app->get('/api/animals', 'Shelter\\Controller\\AnimalController::cgetAll')
    ->bind('list_animals');

$app->get('/api/animals/{id}', 'Shelter\\Controller\\AnimalController::getSingle')
    ->bind('single_animal');

$app->run();
