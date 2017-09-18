<?php

use Controller\ClientController;
use Controller\CollectorController;
use Repository\ClientRepository;
use Repository\CollectorRepository;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

//d�finition de la base de donn�e
$app->register (
        new DoctrineServiceProvider(),
        [
            'db.options' =>[
                        'driver' => 'pdo_mysql',
                        'host' => 'localhost',
                        'dbname' => 'alchimistes', 
                        'user' => 'root',
                        'password' => '',
                        'charset' => 'utf8'
                ]
        ]
        );


// gestionnaire de sessions de Symfony($app['session']
$app->register(new SessionServiceProvider());

$app['client.manager'] = function () use($app) {
    return new Service\ClientManager($app['session']);
};

$app['collector.manager'] = function () use($app) {
    return new Service\CollectorManager($app['session']);
};

//Admin inscription d'un collecteur brouillon
$app['collector.controller'] = function () use ($app)
{
    return new CollectorController($app);
};

$app['collector.repository']= function () use ($app){
    return new CollectorRepository($app['db']);
};

$app['client.controller'] = function () use ($app)
{
    return new ClientController($app);
};

$app['client.repository']= function () use ($app){
    return new ClientRepository($app['db']);
};

return $app;
//commentaire